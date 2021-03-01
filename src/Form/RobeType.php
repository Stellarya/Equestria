<?php

namespace App\Form;

use App\Entity\Robe;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RobeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('libelle', TextType::class, array('attr' => array('maxLength' => 250)))
            ->add('criniere', TextType::class, array('attr' => array('maxLength' => 250)))
            ->add('corps', TextType::class, array('attr' => array('maxLength' => 250)))
            ->add('enregistrer', SubmitType::class);
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Robe::class,
        ]);
    }
}
