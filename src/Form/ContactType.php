<?php

namespace App\Form;

use App\Entity\Contact;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('civilit', ChoiceType::class, [
                'choices'  => [
                    'Civility' => "",
                    'Mrs' => 0,
                    'Mr' => 1,
                    'No binary' => -1
                ],
            ])
            ->add('lastname')
            ->add('firstname')
            ->add('email')
            ->add('phone')
            ->add('newsletter')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Contact::class,
        ]);
    }
}
