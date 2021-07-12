<?php

namespace App\Form;

use App\Entity\Affixe;
use App\Entity\Race;
use App\Repository\RaceRepository;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AffixeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('libelle', TextType::class, array('attr' => array('maxLength' => 250)))
            ->add('enregistrer', SubmitType::class);
        $this->addRace($builder);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Affixe::class,
        ]);
    }

    private function addRace(FormBuilderInterface $builder)
    {
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
}
