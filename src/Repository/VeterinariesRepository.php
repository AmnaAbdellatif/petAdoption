<?php

namespace App\Repository;

use App\Entity\Veterinaries;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Veterinaries|null find($id, $lockMode = null, $lockVersion = null)
 * @method Veterinaries|null findOneBy(array $criteria, array $orderBy = null)
 * @method Veterinaries[]    findAll()
 * @method Veterinaries[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class VeterinariesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Veterinaries::class);
    }

    // /**
    //  * @return Veterinaries[] Returns an array of Veterinaries objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('v')
            ->andWhere('v.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('v.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Veterinaries
    {
        return $this->createQueryBuilder('v')
            ->andWhere('v.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
