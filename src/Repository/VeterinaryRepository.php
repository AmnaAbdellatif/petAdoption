<?php

namespace App\Repository;

use App\Entity\Veterinary;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Veterinary|null find($id, $lockMode = null, $lockVersion = null)
 * @method Veterinary|null findOneBy(array $criteria, array $orderBy = null)
 * @method Veterinary[]    findAll()
 * @method Veterinary[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class VeterinaryRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Veterinary::class);
    }

    // /**
    //  * @return Veterinary[] Returns an array of Veterinary objects
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
    public function findOneBySomeField($value): ?Veterinary
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
