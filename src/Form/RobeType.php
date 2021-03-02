<?php

namespace App\Form;

use App\Entity\Couleur;
use App\Entity\Robe;
use App\Repository\CouleurRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
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
            ->add('enregistrer', SubmitType::class);
        $this->addCriniere($builder);
        $this->addCorps($builder);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Robe::class,
        ]);
    }

    private function addCriniere (FormBuilderInterface $builder) {
        $oRobe = $builder->getData();
        $oCriniere = $oRobe->getCriniere();
        if ($oRobe->getId() != NULL && $oCriniere) {
            $builder->add('criniere', EntityType::class, array('class' => Couleur::class,
                'query_builder' => function (CouleurRepository $r) use ($oCriniere) {
                    return $r->createQueryBuilder('c')
                        ->where('c.id=' . $oCriniere->getId())
                        ->orderBy('c.libelle');
                },
                'choice_label' => function ($criniere) {
                    return $criniere->getLibelle();
                }));
        } else {
            $builder->add('criniere', EntityType::class, array('class' => Couleur::class,
                'query_builder' => function (CouleurRepository $r) {
                    return $r->createQueryBuilder('c')
                        ->orderBy('c.libelle');
                },
                'choice_label' => function ($criniere) {
                    return $criniere->getLibelle();
                }));
        }
    }

    private function addCorps (FormBuilderInterface $builder) {
        $oRobe = $builder->getData();
        $oCorps = $oRobe->getCorps();
        if ($oRobe->getId() != NULL && $oCorps) {
            $builder->add('corps', EntityType::class, array('class' => Couleur::class,
                'query_builder' => function (CouleurRepository $r) use ($oCorps) {
                    return $r->createQueryBuilder('c')
                        ->where('c.id=' . $oCorps->getId())
                        ->orderBy('c.libelle');
                },
                'choice_label' => function ($corps) {
                    return $corps->getLibelle();
                }));
        } else {
            $builder->add('corps', EntityType::class, array('class' => Couleur::class,
                'query_builder' => function (CouleurRepository $r) {
                    return $r->createQueryBuilder('c')
                        ->orderBy('c.libelle');
                },
                'choice_label' => function ($corps) {
                    return $corps->getLibelle();
                }));
        }
    }
}
