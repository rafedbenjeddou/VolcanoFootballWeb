<?php

namespace App\Repository;

use App\Entity\Billet;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Billet|null find($id, $lockMode = null, $lockVersion = null)
 * @method Billet|null findOneBy(array $criteria, array $orderBy = null)
 * @method Billet[]    findAll()
 * @method Billet[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BilletRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Billet::class);
    }

    // /**
    //  * @return Billet[] Returns an array of Billet objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('b.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Billet
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
    function ListBilletByMatche($id){                                                      // function by QueryBuilder
        return $this-> createQueryBuilder('b')                                        //pour afficher la liste des billets
            ->join('b.matche' , 'm')
            ->addSelect('m')
            ->where('m.id=:id')
            ->setParameter('id',$id)                //pour definir un parametre
            ->getQuery()->getResult();                  //recuperer l'objet query , retourner un tableau d'objet contenant le resultat
    }
}
