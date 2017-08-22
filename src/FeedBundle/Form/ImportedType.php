<?php

namespace FeedBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
//use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class ImportedType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('index', NumberType::class);
        $builder->add('index_start_at', NumberType::class);
        $builder->add('integer', NumberType::class);
        $builder->add('float', NumberType::class);
        $builder->add('name', TextType::class);
        $builder->add('surname', TextType::class);
        $builder->add('fullname', TextType::class);
        $builder->add('email', EmailType::class);
        $builder->add('bool', ChoiceType::class, array('choices' => array('true' => 'true', 'false' => 'false')));
//        $builder->add('bool', CheckboxType::class, array('required' => false));
        $builder->add('save', SubmitType::class, array(
            'label' => 'Submit',
            'attr' => array('class' => 'btn btn-info pull-right'),
        ));
    }
}
