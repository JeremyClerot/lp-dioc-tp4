<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        // FIXME: Ajouter les champs firstname, lastname, email, birthday

        $builder
            ->add('plainPassword', RepeatedType::class, [
                'mapped'         => false,
                'type'           => PasswordType::class,
                'first_options'  => ['label' => 'Password'],
                'second_options' => ['label' => 'Repeat Password'],
            ])

            ->add('plainPassword', RepeatedType::class, array(
                'mapped' => false,
                'type' => PasswordType::class,
                'first_options'  => array('label' => 'Password'),
                'second_options' => array('label' => 'Repeat Password'),
            ))
            ->add("firstname", TextType::class)
            ->add("lastname", TextType::class)
            ->add("email", TextType::class)
            ->add("birthday", DateType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        // FIXME: ajouter la configuration du form
    }
}
