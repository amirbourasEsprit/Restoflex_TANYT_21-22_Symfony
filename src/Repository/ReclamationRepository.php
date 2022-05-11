<?php

namespace App\Repository;

use App\Entity\Reclamation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Reclamation|null find($id, $lockMode = null, $lockVersion = null)
 * @method Reclamation|null findOneBy(array $criteria, array $orderBy = null)
 * @method Reclamation[]    findAll()
 * @method Reclamation[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ReclamationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Reclamation::class);
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(Reclamation $entity, bool $flush = true): void
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
    public function remove(Reclamation $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }
    public function ReclamationRecu($nom)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.destinataire = :val')
            ->setParameter('val', $nom)
            ->getQuery()
            ->getResult();

    }

    public function modifier_statut($id){
        $qb = $this->getEntityManager()->createQueryBuilder();
        $q = $qb->update('App\Entity\Reclamation', 'u')
            ->set('u.statutReclamation', ':stat')
            ->where('u.numReclamation = :id')
            ->setParameter('id', $id)
            ->setParameter('stat', "Traité")
            ->getQuery();
        $p = $q->execute();
    }
    // /**
    //  * @return Reclamation[] Returns an array of Reclamation objects
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

    /*
    public function findOneBySomeField($value): ?Reclamation
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
    public function FindEmploye(){

         
        $queryBuilder=$this->createQueryBuilder('r')
            ->select('r','u','ro')
            ->leftJoin('App\Entity\Utilisateur', 'u', 'WITH', 'u = r.id')
            ->leftJoin('App\Entity\Role', 'ro', 'WITH', 'u.idRole = ro.idRole')
            ->getQuery()->getResult();
            return $queryBuilder;
        }
    function traite()
    {
        $entityManager=$this->getEntityManager();
        $query=$entityManager->createQuery('SELECT count(a) from App\Entity\Reclamation a WHERE (a.statutReclamation LIKE :type) ')->setParameter('type', 'traité');
        return $query->getSingleScalarResult();
    }
    function ntraite()
    {
        $entityManager=$this->getEntityManager();
        $query=$entityManager->createQuery('SELECT count(a) from App\Entity\Reclamation a WHERE (a.statutReclamation LIKE :type) ')->setParameter('type', 'en cours');
        return $query->getSingleScalarResult();
    }
 }


