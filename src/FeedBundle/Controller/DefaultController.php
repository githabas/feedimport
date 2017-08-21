<?php

namespace FeedBundle\Controller;

use FeedBundle\FeedBundle;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use FeedBundle\Entity\Imported;
use FeedBundle\Entity\Feed;
use Symfony\Component\HttpFoundation\JsonResponse;
use JMS\SerializerBundle\JMSSerializerBundle;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $form = $this->createForm('FeedBundle\Form\ImportType');
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();

            $feedurl = $data['feedurl'];
            $imported = $this->importFeed($feedurl);
            if ($imported) {
                $this->addFlash('success', 'Imported items: '.$imported);
            }
        }

        $table = $em->getRepository('FeedBundle:Imported')->findAll();
        $paginator = $this->get('knp_paginator');
        $table = $paginator->paginate($table, $request->get('page', 1), 25);

        return $this->render('FeedBundle:Default:index.html.twig', array(
            'form' => $form->createView(),
            'imported' => $table,
        ));
    }

    /**
     * Displays a form to edit an existing tags entity.
     *
     * @Route("/{id}/edit", name="imported_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Imported $imported)
    {
        $editForm = $this->createForm('FeedBundle\Form\ImportedType', $imported);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();
            return $this->redirectToRoute('homepage');
        }

        return $this->render('FeedBundle:Default:edit.html.twig', array(
            'imported' => $imported,
            'form' => $editForm->createView(),
        ));
    }

    /**
     * Deletes a imported entity.
     *
     * @Route("/imported-delete", name="imported_delete")
     */
    public function deleteAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('FeedBundle:Imported')->find($request->request->get('id'));

        if ($entity) {
            $em->remove($entity);
            $em->flush($entity);
        }

        return $this->redirectToRoute('homepage');
    }

    private function importFeed($url) {
        $em = $this->getDoctrine()->getManager();
        $page = file_get_contents($url);


        $sql = 'TRUNCATE TABLE `imported`';
        $em->getConnection()->prepare($sql)->execute();

        $total = 0;

        $serializer = \JMS\Serializer\SerializerBuilder::create()->build();
        $decoded = $serializer->deserialize($page, Feed::class, 'json');

        foreach ($decoded->getItems() as $entity) {
            $em->persist($entity);
            $total += 1;
        }
        $em->flush();

        return $total;
    }

}
