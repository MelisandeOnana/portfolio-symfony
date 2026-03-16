<?php

namespace App\Form;

use App\Entity\Technologie;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;

class TechnologyType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom', TextType::class, [
                'label' => 'Nom',
                'required' => true,
            ])
            ->add('description', TextareaType::class, [
                'label' => 'Description',
                'required' => false,
            ])
            ->add('dateDebut', DateType::class, [
                'label' => 'Date de début',
                'widget' => 'single_text',
                'required' => true,
            ])
            ->add('statut', ChoiceType::class, [
                'label' => 'Statut',
                'choices' => [
                    'En cours' => 'en_cours',
                    'Maîtrisé' => 'termine',
                ],
                'required' => false,
                'placeholder' => 'Sélectionner',
            ])
            ->add('certification_files', FileType::class, [
                'label' => 'Certifications PDF',
                'mapped' => false,
                'required' => false,
                'multiple' => true,
            ])
            ->add('certification_titles', CollectionType::class, [
                'label' => 'Titres des certifications',
                'mapped' => false,
                'required' => false,
                'allow_add' => true,
                'allow_delete' => true,
                'entry_type' => TextType::class,
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Technologie::class,
        ]);
    }
}
