<?php

namespace App\Repository;

use App\Entity\CategoriesParent;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method CategoriesParent|null find($id, $lockMode = null, $lockVersion = null)
 * @method CategoriesParent|null findOneBy(array $criteria, array $orderBy = null)
 * @method CategoriesParent[]    findAll()
 * @method CategoriesParent[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CategoriesParentRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, CategoriesParent::class);
    }

//    /**
//     * @return CategoriesParent[] Returns an array of CategoriesParent objects
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
    public function findOneBySomeField($value): ?CategoriesParent
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
