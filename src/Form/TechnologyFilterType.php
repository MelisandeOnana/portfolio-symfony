<?php
namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class TechnologyFilterType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('technology', ChoiceType::class, [
                'choices' => $options['technologies'],
                'label' => false,
                'required' => false,
                'placeholder' => 'Toutes',
                'attr' => [
                    'class' => 'form-select rounded-lg px-4 py-3 border border-violet-500/30 bg-violet-50 text-violet-900 font-medium focus:ring-violet-500 focus:border-violet-500 transition-all duration-300',
                ],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'technologies' => [],
        ]);
    }
}
