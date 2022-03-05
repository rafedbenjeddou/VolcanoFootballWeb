<?php

namespace App\Repository;

use App\Entity\ReservationBillet;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ReservationBillet|null find($id, $lockMode = null, $lockVersion = null)
 * @method ReservationBillet|null findOneBy(array $criteria, array $orderBy = null)
 * @method ReservationBillet[]    findAll()
 * @method ReservationBillet[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ReservationBilletRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ReservationBillet::class);
    }

    // /**
    //  * @return ReservationBillet[] Returns an array of ReservationBillet objects
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
    public function findOneBySomeField($value): ?ReservationBillet
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
