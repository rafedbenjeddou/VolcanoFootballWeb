<?php

namespace App\Repository;

use App\Entity\MatchJson;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method MatchJson|null find($id, $lockMode = null, $lockVersion = null)
 * @method MatchJson|null findOneBy(array $criteria, array $orderBy = null)
 * @method MatchJson[]    findAll()
 * @method MatchJson[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MatchJsonRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, MatchJson::class);
    }

    // /**
    //  * @return MatchJson[] Returns an array of MatchJson objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('m.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?MatchJson
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
