<?php

namespace App\Form;

use App\Entity\Personne;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PersonneType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom', TextType::class, array('attr' => array('maxLength' => 250)))
            ->add('prenom', TextType::class, array('attr' => array('maxLength' => 250)))
            ->add('dateNaissance', DateType::class, array('widget'=> 'single_text','format'=>'d/M/y', 'html5' => false))
            ->add('adresse', TextType::class, array('attr' => array('maxLength' => 250), 'required' => false))
            ->add('codePostal', IntegerType::class, array('required' => false))
            ->add('ville', TextType::class, array('attr' => array('maxLength' => 250), 'required' => false))
            ->add('estCavalier', CheckboxType::class, array('required' => false))
            ->add('estProprietaire', CheckboxType::class, array('required' => false))
            ->add('enregistrer', SubmitType::class);
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Personne::class,
        ]);
    }
}
