<?php

namespace App\Repository;

use App\Entity\CommentByUser;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method CommentByUser|null find($id, $lockMode = null, $lockVersion = null)
 * @method CommentByUser|null findOneBy(array $criteria, array $orderBy = null)
 * @method CommentByUser[]    findAll()
 * @method CommentByUser[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CommentByUserRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, CommentByUser::class);
    }

    // /**
    //  * @return CommentByUser[] Returns an array of CommentByUser objects
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
    public function findOneBySomeField($value): ?CommentByUser
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
