<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class ContactType extends AbstractType

{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('prenom', TextType::class,[
                'label' => 'Votre prénom',
            ])
            ->add('nom', TextType::class,[
                'label' => 'Votre nom'
            ])
            ->add('email',EmailType::class,[
                'label' => 'Votre adresse email'
            ])
            ->add('content', TextareaType::class,[
                'label'=>'Message'
            ])
            ->add('submit', SubmitType::class,[
                'label' =>'Envoyer',
                'attr' => [
                    'class'=> 'btn btn-success disabled'

                ]
            ])
        ;
    }


    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([

        ]);
    }
}