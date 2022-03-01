<?php

namespace App\Repository;

use App\Entity\ContactJoueur;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ContactJoueur|null find($id, $lockMode = null, $lockVersion = null)
 * @method ContactJoueur|null findOneBy(array $criteria, array $orderBy = null)
 * @method ContactJoueur[]    findAll()
 * @method ContactJoueur[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ContactJoueurRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ContactJoueur::class);
    }

    // /**
    //  * @return ContactJoueur[] Returns an array of ContactJoueur objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ContactJoueur
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
