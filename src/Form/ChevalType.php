<?php

namespace App\Form;

use App\Entity\Affixe;
use App\Entity\Cheval;
use App\Entity\Race;
use App\Entity\Robe;
use App\Entity\Sexe;
use App\Repository\AffixeRepository;
use App\Repository\RaceRepository;
use App\Repository\RobeRepository;
use App\Repository\SexeRepository;
use Doctrine\DBAL\Types\BooleanType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ChevalType extends AbstractType {
    public function buildForm (FormBuilderInterface $builder, array $options) {
        $builder
            ->add('nom', TextType::class, array('attr' => array('maxLength' => 250)))
            ->add('dateNaissance', DateType::class, array('widget'=> 'single_text','format'=>'d/M/y', 'html5' => false))
            ->add('poids', IntegerType::class, array('required' => false))
            ->add('taille', IntegerType::class, array('required' => false))
            ->add('isPureRace', CheckboxType::class, array('required' => false))
            ->add('isReproducteur', CheckboxType::class, array('required' => false))
            ->add('enregistrer', SubmitType::class);
        $this->addRace($builder);
        $this->addAffixe($builder);
        $this->addRobe($builder);
        $this->addSexe($builder);
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
                    return $robe->getLibelle();
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
                    return $race->getLibelle();
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

    private function addSexe (FormBuilderInterface $builder) {
        $oCheval = $builder->getData();
        $oSexe = $oCheval->getSexe();
        if ($oCheval->getId() != NULL && $oSexe) {
            $builder->add('sexe', EntityType::class, array('class' => Sexe::class,
                'query_builder' => function (SexeRepository $r) use ($oSexe) {
                    return $r->createQueryBuilder('sx')
                        ->where('sx.id=' . $oSexe->getId())
                        ->orderBy('sx.libelle');
                },
                'choice_label' => function ($sexe) {
                    return $sexe->getLibelle();
                }));
        } else {
            $builder->add('sexe', EntityType::class, array('class' => Sexe::class,
                'query_builder' => function (SexeRepository $r) {
                    return $r->createQueryBuilder('sx')
                        ->orderBy('sx.libelle');
                },
                'choice_label' => function ($sexe) {
                    return $sexe->getLibelle();
                }));
        }
    }

    private function addAffixe(FormBuilderInterface $builder)
    {
        $oCheval = $builder->getData();
        $oAffixe = $oCheval->getAffixe();
        if ($oCheval->getId() != NULL && $oAffixe) {
            $builder->add('affixe', EntityType::class, array('class' => Affixe::class,
                'query_builder' => function (AffixeRepository $r) use ($oAffixe) {
                    return $r->createQueryBuilder('a')
                        ->where('a.id=' . $oAffixe->getId())
                        ->orderBy('a.libelle');
                },
                'choice_label' => function ($affixe) {
                    return $affixe->getLibelle();
                }));
        } else {
            $builder->add('affixe', EntityType::class, array('class' => Affixe::class,
                'query_builder' => function (AffixeRepository $r) {
                    return $r->createQueryBuilder('a')
                        ->orderBy('a.libelle');
                },
                'choice_label' => function ($affixe) {
                    return $affixe->getLibelle();
                }));
        }
    }


}
