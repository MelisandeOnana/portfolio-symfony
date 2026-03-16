<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use App\Entity\Utilisateur;

class UserProfileType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('prenom', TextType::class, [
                'label' => 'Prénom',
                'attr' => [
                    'class' => 'block w-full px-4 py-2 border border-purple-400 text-purple-700 rounded-xl focus:outline-none focus:ring-2 focus:ring-purple-500 bg-purple-50',
                    'placeholder' => 'Votre prénom',
                ],
            ])
            ->add('nom', TextType::class, [
                'label' => 'Nom',
                'attr' => [
                    'class' => 'block w-full px-4 py-2 border border-purple-400 text-purple-700 rounded-xl focus:outline-none focus:ring-2 focus:ring-purple-500 bg-purple-50',
                    'placeholder' => 'Votre nom',
                ],
            ])
            ->add('email', EmailType::class, [
                'label' => 'Email',
                'attr' => [
                    'class' => 'block w-full px-4 py-2 border border-purple-400 text-purple-700 rounded-xl focus:outline-none focus:ring-2 focus:ring-purple-500 bg-purple-50',
                    'placeholder' => 'Votre adresse email',
                ],
            ])
            ->add('plainPassword', \Symfony\Component\Form\Extension\Core\Type\RepeatedType::class, [
                'type' => \Symfony\Component\Form\Extension\Core\Type\PasswordType::class,
                'mapped' => false,
                'required' => false,
                'constraints' => [
                    new \Symfony\Component\Validator\Constraints\Length([
                        'min' => 6,
                        'minMessage' => 'Le mot de passe doit contenir au moins {{ limit }} caractères',
                        'max' => 4096,
                    ]),
                ],
                'first_options'  => [
                    'label' => 'Nouveau mot de passe',
                    'attr' => [
                        'class' => 'block w-full px-4 py-2 border border-purple-400 text-purple-700 rounded-xl focus:outline-none focus:ring-2 focus:ring-purple-500 bg-purple-50',
                        'placeholder' => 'Nouveau mot de passe (optionnel)',
                    ],
                ],
                'second_options' => [
                    'label' => 'Confirmer le mot de passe',
                    'attr' => [
                        'class' => 'block w-full px-4 py-2 border border-purple-400 text-purple-700 rounded-xl focus:outline-none focus:ring-2 focus:ring-purple-500 bg-purple-50',
                        'placeholder' => 'Confirmer le mot de passe',
                    ],
                ],
                'invalid_message' => 'Les mots de passe doivent correspondre.',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Utilisateur::class,
        ]);
    }
}
