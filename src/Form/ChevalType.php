<?php

namespace App\Form;

use App\Entity\Cheval;
use App\Entity\Race;
use App\Entity\Robe;
use App\Repository\RaceRepository;
use App\Repository\RobeRepository;
use Doctrine\DBAL\Types\BooleanType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ChevalType extends AbstractType {
    public function buildForm (FormBuilderInterface $builder, array $options) {
        $builder
            ->add('nom', TextType::class, array('attr' => array('maxLength' => 250)))
            ->add('affixe', TextType::class, array('attr' => array('maxLength' => 250)))
            ->add('poids', IntegerType::class)
            ->add('taille', IntegerType::class)
            ->add('sexe', TextType::class, array('attr' => array('maxLength' => 250)))
            ->add('enregistrer', SubmitType::class);
        $this->addRace($builder);
        $this->addRobe($builder);
    }

    public function configureOptions (OptionsResolver $resolver) {
        $resolver->setDefaults([
            'data_class' => Cheval::class,
        ]);
    }
    private function addRobe (FormBuilderInterface $builder) {
        $oCheval = $builder->getData();
        $oRobe = $oCheval->getRobe();
        if ($oCheval->getId() != NULL && $oRobe) {
            $builder->add('robe', EntityType::class, array('class' => Robe::class,
                'query_builder' => function (RobeRepository $r) use ($oRobe) {
                    return $r->createQueryBuilder('r')
                        ->where('r.id=' . $oRobe->getId())
                        ->orderBy('r.libelle');
                },
                'choice_label' => function ($robe) {
                    return $robe->getLibelle() ;
                }));
        } else {
            $builder->add('robe', EntityType::class, array('class' => Robe::class,
                'query_builder' => function (RobeRepository $r) {
                    return $r->createQueryBuilder('r')
                        ->orderBy('r.libelle');
                },
                'choice_label' => function ($robe) {
                    return $robe->getLibelle();
                }));
        }
    }

    private function addRace (FormBuilderInterface $builder) {
        $oCheval = $builder->getData();
        $oRace = $oCheval->getRace();
        if ($oCheval->getId() != NULL && $oRace) {
            $builder->add('race', EntityType::class, array('class' => Race::class,
                'query_builder' => function (RaceRepository $r) use ($oRace) {
                    return $r->createQueryBuilder('rc')
                        ->where('rc.id=' . $oRace->getId())
                        ->orderBy('rc.libelle');
                },
                'choice_label' => function ($race) {
                    return $race->getLibelle() ;
                }));
        } else {
            $builder->add('race', EntityType::class, array('class' => Race::class,
                'query_builder' => function (RaceRepository $r) {
                    return $r->createQueryBuilder('rc')
                        ->orderBy('rc.libelle');
                },
                'choice_label' => function ($race) {
                    return $race->getLibelle();
                }));
        }
    }

}
