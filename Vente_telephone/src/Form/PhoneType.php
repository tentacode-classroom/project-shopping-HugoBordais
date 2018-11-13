<?php

namespace App\Form;

use App\Entity\Phone;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PhoneType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('status')
            ->add('price')
            ->add('ecran')
            ->add('stockage')
            ->add('file', FileType::class)
            ->add('description')
            ->add('viewCounter')
            ->add('category')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Phone::class,
        ]);
    }
}
