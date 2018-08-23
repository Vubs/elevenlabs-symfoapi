<?php

namespace App\Repository;

use App\Entity\DumbCharacter;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method DumbCharacter|null find($id, $lockMode = null, $lockVersion = null)
 * @method DumbCharacter|null findOneBy(array $criteria, array $orderBy = null)
 * @method DumbCharacter[]    findAll()
 * @method DumbCharacter[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DumbCharacterRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, DumbCharacter::class);
    }

//    /**
//     * @return Character[] Returns an array of Character objects
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
    public function findOneBySomeField($value): ?Character
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
