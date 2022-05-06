<?php

namespace App\Repository;

use App\Entity\MasterInstitusi;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<MasterInstitusi>
 *
 * @method MasterInstitusi|null find($id, $lockMode = null, $lockVersion = null)
 * @method MasterInstitusi|null findOneBy(array $criteria, array $orderBy = null)
 * @method MasterInstitusi[]    findAll()
 * @method MasterInstitusi[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MasterInstitusiRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, MasterInstitusi::class);
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(MasterInstitusi $entity, bool $flush = true): void
    {
        $this->_em->persist($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function remove(MasterInstitusi $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    // /**
    //  * @return MasterInstitusi[] Returns an array of MasterInstitusi objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('m.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?MasterInstitusi
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
