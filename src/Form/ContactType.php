<?php
namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom', TextType::class, [
                'label' => 'Nom complet *',
                'label_attr' => ['class' => 'block text-sm font-medium text-purple-200 mb-2']
            ])
            ->add('email', EmailType::class, [
                'label' => 'Email *',
                'label_attr' => ['class' => 'block text-sm font-medium text-purple-200 mb-2']
            ])
            ->add('message', TextareaType::class, [
                'label' => 'Message *',
                'label_attr' => ['class' => 'block text-sm font-medium text-purple-200 mb-2']
            ]);
    }
}