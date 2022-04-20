<?php

namespace App\Form;

use App\Entity\Address;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\CountryType;

class AddressType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class, [
                'label'=>'Nommez votre adresse'
            ])

            ->add('firstname', TextType::class, [
                'label'=>'Votre prenom'
            ])

            ->add('lastname', TextType::class, [
                'label'=>'Votre nom'
            ])

            ->add('company', TextType::class, [
                'label'=>'Votre societe', 
                'required' => false,
                'attr' => ['placeholder'=>'(facultatif)']
            ])

            ->add('address', TextType::class, [
                'label'=>'Votre adresse'
            ])

            ->add('postal', TextType::class, [
                'label'=>'Votre code postal'
            ])

            ->add('city', TextType::class, [
                'label'=>'Ville'
            ])

            ->add('country', CountryType::class, [
                'label'=>'Pays'
            ])

            ->add('phone', TelType::class, [
                'label'=>'Votre numero de telephone'
            ])

            ->add('submit', SubmitType::class, [
                'label'=> 'Valider',
                'attr' => ['class' => 'btn btn-info']
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Address::class,
        ]);
    }
}
