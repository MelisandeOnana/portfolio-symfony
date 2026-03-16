<?php
namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProjectDeleteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        // Uniquement le champ CSRF, pas besoin d'autres champs
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'csrf_protection' => true,
            'csrf_field_name' => '_token',
            'csrf_token_id'   => 'delete',
        ]);
    }
}
