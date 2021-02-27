<?php

namespace App\Repository;

use App\Entity\Affixe;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Affixe|null find($id, $lockMode = null, $lockVersion = null)
 * @method Affixe|null findOneBy(array $criteria, array $orderBy = null)
 * @method Affixe[]    findAll()
 * @method Affixe[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AffixeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Affixe::class);
    }

    // /**
    //  * @return Affixe[] Returns an array of Affixe objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Affixe
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
