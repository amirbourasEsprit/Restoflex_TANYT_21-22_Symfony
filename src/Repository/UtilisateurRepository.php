<?php

namespace App\Repository;

use App\Entity\Utilisateur;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Utilisateur|null find($id, $lockMode = null, $lockVersion = null)
 * @method Utilisateur|null findOneBy(array $criteria, array $orderBy = null)
 * @method Utilisateur[]    findAll()
 * @method Utilisateur[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UtilisateurRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Utilisateur::class);
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(Utilisateur $entity, bool $flush = true): void
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
    public function remove(Utilisateur $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    // /**
    //  * @return Utilisateur[] Returns an array of Utilisateur objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('u.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Utilisateur
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */


    //affiche l'utilisateur employee qui envoie reclamation
    public function FindEmploye(){

         
        $queryBuilder=$this->createQueryBuilder('u')
            ->select('r','ro')
            ->leftJoin('App\Entity\Reclamation', 'r', 'WITH', 'u = r.id')
            ->leftJoin('App\Entity\Role', 'ro', 'WITH', 'u.idRole = ro.idRole')
            ->where('ro.nomRole = :value ')
            ->setParameter('value', 'Employée')
            ->getQuery()->getResult();
            return $queryBuilder;
        }

         //affiche l'utilisateur four qui envoie reclamation
        public function FindFournisseur(){

         
            $queryBuilder=$this->createQueryBuilder('u')
                ->select('r','ro')
                ->leftJoin('App\Entity\Reclamation', 'r', 'WITH', 'u = r.id')
                ->leftJoin('App\Entity\Role', 'ro', 'WITH', 'u.idRole = ro.idRole')
                ->where('ro.nomRole = :value ')
                ->setParameter('value', 'Utilisateur_fournisseur')
                ->getQuery()->getResult();
                return $queryBuilder;
            }


              //afficher les reclamations envoyees au gerant
        public function FindGerant(){

         
            $queryBuilder=$this->createQueryBuilder('u')
                ->select('r','ro')
                ->leftJoin('App\Entity\Reclamation', 'r', 'WITH', 'u = r.id')
                ->leftJoin('App\Entity\Role', 'ro', 'WITH', 'u.idRole = ro.idRole')
                ->where('ro.nomRole = :value ')
                ->setParameter('value', 'Gérant')
                ->getQuery()->getResult();
                return $queryBuilder;
            }
}
