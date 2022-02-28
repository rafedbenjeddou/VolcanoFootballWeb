<?php

namespace App\Repository;

use App\Entity\ReservationKiosque;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ReservationKiosque|null find($id, $lockMode = null, $lockVersion = null)
 * @method ReservationKiosque|null findOneBy(array $criteria, array $orderBy = null)
 * @method ReservationKiosque[]    findAll()
 * @method ReservationKiosque[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ReservationKiosqueRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ReservationKiosque::class);
    }

    // /**
    //  * @return ReservationKiosque[] Returns an array of ReservationKiosque objects
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
    public function findOneBySomeField($value): ?ReservationKiosque
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
