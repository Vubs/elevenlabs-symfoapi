<?php

namespace App\Repository;

use App\Entity\Charater;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Charater|null find($id, $lockMode = null, $lockVersion = null)
 * @method Charater|null findOneBy(array $criteria, array $orderBy = null)
 * @method Charater[]    findAll()
 * @method Charater[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CharaterRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Charater::class);
    }

//    /**
//     * @return Charater[] Returns an array of Charater objects
//     */
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
    public function findOneBySomeField($value): ?Charater
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
