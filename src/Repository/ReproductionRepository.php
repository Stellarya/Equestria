<?php

namespace App\Repository;

use App\Entity\Reproduction;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Reproduction|null find($id, $lockMode = null, $lockVersion = null)
 * @method Reproduction|null findOneBy(array $criteria, array $orderBy = null)
 * @method Reproduction[]    findAll()
 * @method Reproduction[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ReproductionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Reproduction::class);
    }

    // /**
    //  * @return Reproduction[] Returns an array of Reproduction objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('r.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Reproduction
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
