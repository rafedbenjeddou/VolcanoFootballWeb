<?php

namespace App\Repository;

use App\Entity\Matche;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Matche|null find($id, $lockMode = null, $lockVersion = null)
 * @method Matche|null findOneBy(array $criteria, array $orderBy = null)
 * @method Matche[]    findAll()
 * @method Matche[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MatcheRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Matche::class);
    }

    // /**
    //  * @return Matche[] Returns an array of Matche objects
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
    public function findOneBySomeField($value): ?Matche
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */

     /**
    * @return Matche[] Returns an array of Matche objects
    */

    public function Recherche($value)
    {
        return $this->createQueryBuilder('m')
            ->where('m.NomMatche = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getResult()
        ;
    }

    /**
     * @return Matche[] Returns an array of Matche objects
     */

    public function RechercheDate($value)
    {
        return $this->createQueryBuilder('m')
            ->where('m.date = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getResult()
            ;
    }

}
