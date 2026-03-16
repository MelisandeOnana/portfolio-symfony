<?php

namespace App\Form;

use App\Entity\Projet;
use App\Entity\Technologie;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProjectType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titre', TextType::class, [
                'label' => 'Titre',
                'required' => true,
                'attr' => [
                    'class' => 'w-full px-4 py-3 border border-purple-200 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent',
                ],
                'label_attr' => [
                    'class' => 'block text-sm font-medium text-purple-700 mb-2',
                ],
            ])
                ->add('image', \Symfony\Component\Form\Extension\Core\Type\FileType::class, [
                    'label' => 'Image du projet',
                    'required' => false,
                    'mapped' => false, // Ne mappe pas directement à l'entité
                    'data_class' => null,
                    'attr' => [
                        'accept' => '.png,.jpg,.jpeg,.webp',
                        'class' => 'w-full px-4 py-3 border border-purple-200 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent',
                    ],
                    'label_attr' => [
                        'class' => 'block text-sm font-medium text-purple-700 mb-2',
                    ],
                ])
            ->add('typeProjet', ChoiceType::class, [
                'label' => 'Type de projet',
                'placeholder' => 'Sélectionner un type de projet',
                'choices' => [
                    'Scolaire' => 'Scolaire',
                    'Professionnel' => 'Pro',
                    'Personnel' => 'Perso',
                ],
                'required' => true,
                'attr' => [
                    'class' => 'w-full px-4 py-3 border border-purple-200 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent',
                ],
                'label_attr' => [
                    'class' => 'block text-sm font-medium text-purple-700 mb-2',
                ],
            ])
            ->add('description', TextareaType::class, [
                'label' => 'Description',
                        // Champ durée supprimé
                'attr' => [
                    'accept' => '.png,.jpg,.jpeg, webp',
                    'class' => 'w-full px-4 py-3 border border-purple-200 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent',
                ],
                'label_attr' => [
                    'class' => 'block text-sm font-medium text-purple-700 mb-2',
                ],
            ])
            ->add('dateDebut', DateType::class, [
                'label' => 'Date de début',
                'widget' => 'single_text',
                'required' => true,
                'attr' => [
                    'class' => 'w-full px-4 py-3 border border-purple-200 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent',
                ],
                'label_attr' => [
                    'class' => 'block text-sm font-medium text-purple-700 mb-2',
                ],
            ])
            ->add('dateFin', DateType::class, [
                'label' => 'Date de fin',
                'widget' => 'single_text',
                'required' => false,
                'attr' => [
                    'class' => 'w-full px-4 py-3 border border-purple-200 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent',
                ],
                'label_attr' => [
                    'class' => 'block text-sm font-medium text-purple-700 mb-2',
                ],
            ])
            ->add('etat', ChoiceType::class, [
                'label' => 'État',
                'placeholder' => 'Sélectionner un état',
                'choices' => [
                    'Terminé' => 'Terminé',
                    'En cours' => 'En cours',
                    'En pause' => 'En pause',
                    'Annulé' => 'Annulé',
                ],
                'required' => true,
                'attr' => [
                    'class' => 'w-full px-4 py-3 border border-purple-200 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent',
                ],
                'label_attr' => [
                    'class' => 'block text-sm font-medium text-purple-700 mb-2',
                ],
            ])
            ->add('visible', ChoiceType::class, [
                'label' => 'Visibilité',
                'placeholder' => 'Sélectionner une visibilité',
                'choices' => [
                    'Visible sur le site' => true,
                    'Masqué' => false,
                ],
                'required' => true,
                'attr' => [
                    'class' => 'w-full px-4 py-3 border border-purple-200 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent',
                ],
                'label_attr' => [
                    'class' => 'block text-sm font-medium text-purple-700 mb-2',
                ],
            ])
            ->add('lien', UrlType::class, [
                'label' => 'Lien du projet',
                'required' => false,
                'attr' => [
                    'class' => 'w-full px-4 py-3 border border-purple-200 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent',
                ],
                'label_attr' => [
                    'class' => 'block text-sm font-medium text-purple-700 mb-2',
                ],
            ])
            ->add('githubLinks', TextType::class, [
                'label' => 'Lien GitHub',
                'required' => false,
                'attr' => [
                    'class' => 'w-full px-4 py-3 border border-purple-200 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent',
                ],
                'label_attr' => [
                    'class' => 'block text-sm font-medium text-purple-700 mb-2',
                ],
            ])
            ->add('documents', \Symfony\Component\Form\Extension\Core\Type\FileType::class, [
                'label' => 'Documents (fichier)',
                'required' => false,
                'mapped' => false,
                'attr' => [
                    'accept' => '.pdf,.doc,.docx,.png,.jpg,.jpeg',
                    'class' => 'w-full px-4 py-3 border border-purple-200 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent',
                ],
                'label_attr' => [
                    'class' => 'block text-sm font-medium text-purple-700 mb-2',
                ],
            ])
            ->add('technologies', EntityType::class, [
                'class' => Technologie::class,
                'choice_label' => 'nom',
                'multiple' => true,
                'expanded' => true,
                'label' => 'Technologies utilisées',
                'required' => false,
                'label_attr' => [
                    'class' => 'block text-sm font-medium text-purple-700 mb-2',
                ],
            ])
            ->add('save', SubmitType::class, [
                'label' => 'Sauvegarder',
                'attr' => ['class' => 'btn btn-primary'],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Projet::class,
        ]);
    }
}
