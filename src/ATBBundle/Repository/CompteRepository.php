<?php
/**
 * Created by PhpStorm.
 * User: farah
 * Date: 27/02/2019
 * Time: 10:21
 */

namespace ATBBundle\Repository;
use Doctrine\ORM\QueryBuilder;


class CompteRepository extends \Doctrine\ORM\EntityRepository
{


    public function afficherCompteDQL($user){
        $query=$this->getEntityManager()->createQuery('SELECT t from ATBBundle:Accounts t where t.idClient= ?1');
        $query->setParameter(1, $user->getId());
        $t= $query->getResult();
        return $t;

    }

    public function afficherCompte2DQL($user){
        $query=$this->getEntityManager()->createQuery('SELECT t from ATBBundle:Accounts t where t.idClient= ?1');
        $query->setParameter(1, $user->getId());
        return $query;
    }

    public function findCompteDQL($user){
        $query=$this->getEntityManager()->createQuery('SELECT t.solde from ATBBundle:Accounts t where t.numCompte= ?1');
        $query->setParameter(1, $user);
        return $query->getSingleScalarResult();


        /*
         *
         *
          $query=$this->getEntityManager()->createQuery('SELECT t.solde,t.soldeDisponible,t.soldeActuel,t.soldeSoumis from ATBBundle:Accounts t where t.numCompte= ?1');
        $query->setParameter(1, '0532984751364');
        $t= $query->getResult();
        return $t;

         */
    }

    public function editsolde( $montant,$numC)
    {

        $query = $this->getEntityManager()
            ->createQuery('UPDATE ATBBundle:Accounts m SET m.solde =m.solde- ?2 WHERE m.numCompte = ?1');

        $query->setParameter(2 , $montant);

        $query->setParameter(1, $numC);

        $query->execute();
    }



    public function editsolde2( $montant,$numR)
    {

        $query = $this->getEntityManager()
            ->createQuery('UPDATE ATBBundle:Accounts m SET m.solde =m.solde+ ?2 WHERE m.rib = ?1');

        $query->setParameter(2 , $montant);

        $query->setParameter(1, $numR);

        $query->execute();
    }



}
