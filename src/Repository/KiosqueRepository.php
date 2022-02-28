<?php

namespace App\Repository;

use App\Entity\Kiosque;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Kiosque|null find($id, $lockMode = null, $lockVersion = null)
 * @method Kiosque|null findOneBy(array $criteria, array $orderBy = null)
 * @method Kiosque[]    findAll()
 * @method Kiosque[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class KiosqueRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Kiosque::class);
    }

    // /**
    //  * @return Kiosque[] Returns an array of Kiosque objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('k')
            ->andWhere('k.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('k.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Kiosque
    {
        return $this->createQueryBuilder('k')
            ->andWhere('k.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
