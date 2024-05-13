<?php

namespace App\Form\Type;

use FM\ElfinderBundle\Form\Type\ElFinderType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ElfinderDesignedType extends AbstractType
{
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'instance' => 'form'
        ]);
    }

    public function getParent()
    {
        return ElFinderType::class;
    }
}