<?php
namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\SubmitButton;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TranslationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstname', TextType::class, [
                'label' => 'translation.firstname',
            ])
            ->add('lastname', TextType::class, [
                'label' => 'translation.lastname',
            ])
            ->add('description', TextType::class, [
                'label' => 'translation.description',
            ])
            ->add('submit', SubmitType::class, [
                'label' => 'translation.submit',
            ]);
    }


}