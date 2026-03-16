<?php
namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class ProjectTypeFilterType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('typeProjet', ChoiceType::class, [
                'choices' => $options['types'],
                'label' => false,
                'required' => false,
                'placeholder' => 'Tous',
                'attr' => [
                    'class' => 'form-select rounded-lg px-4 py-3 border border-purple-500/30 bg-purple-50 text-purple-900 font-medium focus:ring-purple-500 focus:border-purple-500 transition-all duration-300',
                ],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'types' => [],
            'annees' => [],
        ]);
    }
}
