<?php

namespace FeedBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class ImportType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('feedurl', TextType::class,
            array(
                'label' => false,
                'attr' => array('style' => 'background-color: rgb(240,240,240);'),
                'data' => 'https://gist.githubusercontent.com/emodus/27d245484a85c2286722b9d146c53354/raw/c9af224580a22cbde969127527c4500e3f7d2a9e/dummyFeed',
//                'data' => 'dummyFeed.json',
                'constraints' => array(
                    new NotBlank(),
                ),
            )
        );
        $builder->add('save', SubmitType::class, array(
            'label' => 'Import',
            'attr' => array('class' => 'btn btn-info pull-right'),
        ));
    }
}
