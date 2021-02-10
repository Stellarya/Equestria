<?php

namespace App\Repository;

use App\Entity\TypeSpecialite;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TypeSpecialite|null find($id, $lockMode = null, $lockVersion = null)
 * @method TypeSpecialite|null findOneBy(array $criteria, array $orderBy = null)
 * @method TypeSpecialite[]    findAll()
 * @method TypeSpecialite[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TypeSpecialiteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TypeSpecialite::class);
    }

    // /**
    //  * @return TypeSpecialite[] Returns an array of TypeSpecialite objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?TypeSpecialite
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
