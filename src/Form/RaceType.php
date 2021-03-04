<?php

namespace App\Form;

use App\Entity\Race;
use App\Entity\TypeRace;
use App\Repository\TypeRaceRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RaceType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('libelle', TextType::class)
            ->add('origine', TextType::class, array('attr' => array('maxLength' => 250)))
            ->add('enregistrer', SubmitType::class);
        $this->addTypeRace($builder);
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Race::class,
        ]);
    }

    private function addTypeRace (FormBuilderInterface $builder) {
        $oRace = $builder->getData();
        $oTypeRace = $oRace->getTypeRace();
        if ($oRace->getId() != NULL && $oTypeRace) {
            $builder->add('typeRace', EntityType::class, array('class' => TypeRace::class,
                'query_builder' => function (TypeRaceRepository $r) use ($oTypeRace) {
                    return $r->createQueryBuilder('tc')
                        ->where('tc.id=' . $oTypeRace->getId())
                        ->orderBy('tc.libelle');
                },
                'choice_label' => function ($typeRace) {
                    return $typeRace->getLibelle();
                }));
        } else {
            $builder->add('typeRace', EntityType::class, array('class' => TypeRace::class,
                'query_builder' => function (TypeRaceRepository $r) {
                    return $r->createQueryBuilder('tc')
                        ->orderBy('tc.libelle');
                },
                'choice_label' => function ($typeRace) {
                    return $typeRace->getLibelle();
                }));
        }
    }
}
