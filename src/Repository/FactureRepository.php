<?php

namespace App\Repository;


use App\Entity\Stock;
use App\Entity\Facture;
use App\Entity\Commande;
use Doctrine\ORM\ORMException;
use App\Entity\ProduitRestaurant;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;


/**
 * @method Facture|null find($id, $lockMode = null, $lockVersion = null)
 * @method Facture|null findOneBy(array $criteria, array $orderBy = null)
 * @method Facture[]    findAll()
 * @method Facture[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FactureRepository extends ServiceEntityRepository
{


    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Facture::class);
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(Facture $entity, bool $flush = true): void
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
    public function remove(Facture $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    // /**
    //  * @return Facture[] Returns an array of Facture objects
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
    public function findOneBySomeField($value): ?Facture
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */

   
    public function chercherRestaurantQB($numFacture,$idRest)
    {
        return $this->createQueryBuilder('f')
            ->join('f.restaurant', 'r')
            ->addSelect('r.nom,r.adresse')
            ->where('r.idRest=:idRest')
            ->andWhere('f.numFacture=:numFacture')
            ->setParameter('idRest',$idRest)
            ->setParameter('numFacture',$numFacture)
            ->getQuery()->getResult();
    }

    public function listeFactureByFrs($idFournisseur)
    {
        return $this->createQueryBuilder('f')
            ->where('fr.idFournisseur=:idFournisseur')
            ->setParameter('idFournisseur',$idFournisseur)
            ->getQuery()->getResult();
    }

    
    public function calculerTotalDQL($idCmd)
    {
        $em=$this->getEntityManager(); 
        $query=$em->createQuery('select  c.quantite*s.prixUnitaire as total from App\Entity\Commande c , App\Entity\Stock s,
        App\Entity\ProduitRestaurant p WHERE c.idFournisseur=s.idFournisseur AND c.idProduit=p.idPdtrest AND p.nomPdt=s.nomStock
         AND c.idCmd=:idCmd')
        ->setParameter('idCmd',$idCmd);
        return $query->getResult();
    }
}