<?php

namespace App\Repository;

use App\Entity\Reservation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Reservation|null find($id, $lockMode = null, $lockVersion = null)
 * @method Reservation|null findOneBy(array $criteria, array $orderBy = null)
 * @method Reservation[]    findAll()
 * @method Reservation[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ReservationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Reservation::class);
    }

    // /**
    //  * @return Reservation[] Returns an array of Reservation objects
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

    
    public function findOneBySomeField($value): ?Reservation
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    
     
    function findReservationByHebergement($id){ // function by QueryBuilder 
    $entityManager = $this->getEntityManager();
    $query = $entityManager->createQuery("SELECT r FROM  App\Entity\Reservation r JOIN r.hebergement h WHERE h.id=:id" )
    ->setParameter('id',$id);
    return $query->getResult();
    }
    function ListReservationByClient($id){ // function by QueryBuilder 
        return $this-> createQueryBuilder('r')
        ->join('r.user' , 'u')
        ->addSelect('u')
        ->where('u.id=:id')
        ->setParameter('id',$id)
        ->getQuery()->getResult();
    }
    
}
