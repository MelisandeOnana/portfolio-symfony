<?php
namespace App\Form;

use App\Entity\Projet;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ImageProjetType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('projet', EntityType::class, [
                'class' => Projet::class,
                'choice_label' => 'titre',
                'label' => 'Projet',
                'label_attr' => ['class' => 'block text-purple-700 font-semibold mb-2'],
                'attr' => ['class' => 'w-full px-4 py-2 border border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-400'],
            ])
            ->add('image', FileType::class, [
                'label' => 'Image',
                'label_attr' => ['class' => 'block text-purple-700 font-semibold mb-2'],
                'attr' => ['class' => 'w-full px-4 py-2 border border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-400'],
                'required' => true,
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => null,
        ]);
    }
}
