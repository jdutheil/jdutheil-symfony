<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, array('label' => 'Votre nom', 'required' => false))
            ->add('from', EmailType::class, array('label' => 'Votre email (indispensable pour vous recontacter !)'))
            ->add('phone', TextType::class, array('label' => 'Votre téléphone', 'required' => false))
            ->add('message', TextareaType::class, array('label' => 'Votre message', 'attr' => array('rows' => '10',
                                                                                                    'placeholder' => 'Merci de préciser : la date de l\'événement, le lieu, le style musical et toute information que vous jugerez utile.')));
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
