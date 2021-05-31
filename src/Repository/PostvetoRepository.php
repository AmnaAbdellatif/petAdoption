<?php

namespace App\Repository;

use App\Entity\Postveto;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Postveto|null find($id, $lockMode = null, $lockVersion = null)
 * @method Postveto|null findOneBy(array $criteria, array $orderBy = null)
 * @method Postveto[]    findAll()
 * @method Postveto[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PostvetoRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Postveto::class);
    }

    // /**
    //  * @return Postveto[] Returns an array of Postveto objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Postveto
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
