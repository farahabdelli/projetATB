<?php

namespace ATBBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Accounts
 *
 * @ORM\Table(name="accounts")
 * @ORM\Entity(repositoryClass="ATBBundle\Repository\CompteRepository")

 */
class Accounts
{
    /**
     * @var string
     *
     * @ORM\Column(name="num_compte", type="string", length=255, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $numCompte;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_compte", type="string", length=255, nullable=false)
     */
    private $nomCompte;

    /**
     * @var string
     *
     * @ORM\Column(name="RIB", type="string", length=255, nullable=false)
     */
    private $rib;

    /**
     * @var string
     *
     * @ORM\Column(name="type_compte", type="string", length=255, nullable=false)
     */
    private $typeCompte;

    /**
     * @var string
     *
     * @ORM\Column(name="solde", type="string", length=255, nullable=false)
     */
    private $solde;

    /**
     * @var string
     *
     * @ORM\Column(name="solde_actuel", type="string", length=255, nullable=false)
     */
    private $soldeActuel;

    /**
     * @var string
     *
     * @ORM\Column(name="solde_disponible", type="string", length=255, nullable=false)
     */
    private $soldeDisponible;

    /**
     * @var string
     *
     * @ORM\Column(name="solde_reserve", type="string", length=255, nullable=false)
     */
    private $soldeReserve;

    /**
     * @var string
     *
     * @ORM\Column(name="solde_veille", type="string", length=255, nullable=false)
     */
    private $soldeVeille;

    /**
     * @var string
     *
     * @ORM\Column(name="solde_actueltnd", type="string", length=255, nullable=false)
     */
    private $soldeActueltnd;

    /**
     * @var string
     *
     * @ORM\Column(name="devise_compte", type="string", length=255, nullable=false)
     */
    private $deviseCompte;

    /**
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumn(name="id_client",referencedColumnName="id")
     */
    private $idClient;

    /**
     * @var string
     *
     * @ORM\Column(name="iban", type="string", length=255, nullable=false)
     */
    private $iban;

    /**
     * @var string
     *
     * @ORM\Column(name="interet_crediteur", type="string", length=255, nullable=false)
     */
    private $interetCrediteur;

    /**
     * @var string
     *
     * @ORM\Column(name="date_ouverture", type="string", length=255, nullable=false)
     */
    private $dateOuverture;

    /**
     * @var string
     *
     * @ORM\Column(name="solde_soumis", type="string", length=255, nullable=false)
     */
    private $soldeSoumis;

    /**
     * @var string
     *
     * @ORM\Column(name="interet_debiteur", type="string", length=255, nullable=false)
     */
    private $interetDebiteur;

    /**
     * Accounts constructor.
     * @param string $numCompte
     * @param string $typeCompte
     * @param string $soldeActuel
     * @param string $soldeDisponible
     * @param string $soldeActueltnd
     * @param string $deviseCompte
     * @param $idClient
     */
    public function Accounts2($numCompte, $typeCompte, $soldeActuel, $soldeDisponible, $soldeActueltnd, $deviseCompte, $idClient)
    {
        $this->numCompte = $numCompte;
        $this->typeCompte = $typeCompte;
        $this->soldeActuel = $soldeActuel;
        $this->soldeDisponible = $soldeDisponible;
        $this->soldeActueltnd = $soldeActueltnd;
        $this->deviseCompte = $deviseCompte;
        $this->idClient = $idClient;
    }

    /**
     * Accounts constructor.
     * @param string $numCompte
     * @param string $nomCompte
     * @param string $rib
     * @param string $typeCompte
     * @param string $solde
     * @param string $soldeActuel
     * @param string $soldeDisponible
     * @param string $soldeReserve
     * @param string $soldeVeille
     * @param string $soldeActueltnd
     * @param string $deviseCompte
     * @param $idClient
     * @param string $iban
     * @param string $interetCrediteur
     * @param string $dateOuverture
     * @param string $soldeSoumis
     * @param string $interetDebiteur
     */
    public function Accounts($numCompte, $nomCompte, $rib, $typeCompte, $solde, $soldeActuel, $soldeDisponible, $soldeReserve, $soldeVeille, $soldeActueltnd, $deviseCompte, $idClient, $iban, $interetCrediteur, $dateOuverture, $soldeSoumis, $interetDebiteur)
    {
        $this->numCompte = $numCompte;
        $this->nomCompte = $nomCompte;
        $this->rib = $rib;
        $this->typeCompte = $typeCompte;
        $this->solde = $solde;
        $this->soldeActuel = $soldeActuel;
        $this->soldeDisponible = $soldeDisponible;
        $this->soldeReserve = $soldeReserve;
        $this->soldeVeille = $soldeVeille;
        $this->soldeActueltnd = $soldeActueltnd;
        $this->deviseCompte = $deviseCompte;
        $this->idClient = $idClient;
        $this->iban = $iban;
        $this->interetCrediteur = $interetCrediteur;
        $this->$dateOuverture = $dateOuverture;
        $this->soldeSoumis = $soldeSoumis;
        $this->interetDebiteur = $interetDebiteur;
    }

    /**
     * @return string
     */
    public function getNumCompte()
    {
        return $this->numCompte;
    }

    /**
     * @param string $numCompte
     */
    public function setNumCompte($numCompte)
    {
        $this->numCompte = $numCompte;
    }

    /**
     * @return string
     */
    public function getNomCompte()
    {
        return $this->nomCompte;
    }

    /**
     * @param string $nomCompte
     */
    public function setNomCompte($nomCompte)
    {
        $this->nomCompte = $nomCompte;
    }

    /**
     * @return string
     */
    public function getRib()
    {
        return $this->rib;
    }

    /**
     * @param string $rib
     */
    public function setRib($rib)
    {
        $this->rib = $rib;
    }

    /**
     * @return string
     */
    public function getTypeCompte()
    {
        return $this->typeCompte;
    }

    /**
     * @param string $typeCompte
     */
    public function setTypeCompte($typeCompte)
    {
        $this->typeCompte = $typeCompte;
    }

    /**
     * @return string
     */
    public function getSolde()
    {
        return $this->solde;
    }

    /**
     * @param string $solde
     */
    public function setSolde($solde)
    {
        $this->solde = $solde;
    }

    /**
     * @return string
     */
    public function getSoldeActuel()
    {
        return $this->soldeActuel;
    }

    /**
     * @param string $soldeActuel
     */
    public function setSoldeActuel($soldeActuel)
    {
        $this->soldeActuel = $soldeActuel;
    }

    /**
     * @return string
     */
    public function getSoldeDisponible()
    {
        return $this->soldeDisponible;
    }

    /**
     * @param string $soldeDisponible
     */
    public function setSoldeDisponible($soldeDisponible)
    {
        $this->soldeDisponible = $soldeDisponible;
    }

    /**
     * @return string
     */
    public function getSoldeReserve()
    {
        return $this->soldeReserve;
    }

    /**
     * @param string $soldeReserve
     */
    public function setSoldeReserve($soldeReserve)
    {
        $this->soldeReserve = $soldeReserve;
    }

    /**
     * @return string
     */
    public function getSoldeVeille()
    {
        return $this->soldeVeille;
    }

    /**
     * @param string $soldeVeille
     */
    public function setSoldeVeille($soldeVeille)
    {
        $this->soldeVeille = $soldeVeille;
    }

    /**
     * @return string
     */
    public function getSoldeActueltnd()
    {
        return $this->soldeActueltnd;
    }

    /**
     * @param string $soldeActueltnd
     */
    public function setSoldeActueltnd($soldeActueltnd)
    {
        $this->soldeActueltnd = $soldeActueltnd;
    }

    /**
     * @return string
     */
    public function getDeviseCompte()
    {
        return $this->deviseCompte;
    }

    /**
     * @param string $deviseCompte
     */
    public function setDeviseCompte($deviseCompte)
    {
        $this->deviseCompte = $deviseCompte;
    }

    /**
     * @return mixed
     */
    public function getIdClient()
    {
        return $this->idClient;
    }

    /**
     * @param mixed $idClient
     */
    public function setIdClient($idClient)
    {
        $this->idClient = $idClient;
    }

    /**
     * @return string
     */
    public function getIban()
    {
        return $this->iban;
    }

    /**
     * @param string $iban
     */
    public function setIban($iban)
    {
        $this->iban = $iban;
    }

    /**
     * @return string
     */
    public function getInteretCrediteur()
    {
        return $this->interetCrediteur;
    }

    /**
     * @param string $interetCrediteur
     */
    public function setInteretCrediteur($interetCrediteur)
    {
        $this->interetCrediteur = $interetCrediteur;
    }

    /**
     * @return string
     */
    public function getDateOuverture()
    {
        return $this->dateOuverture;
    }

    /**
     * @param string $dateOuverture
     */
    public function setDateOuverture($dateOuverture)
    {
        $this->dateOuverture = $dateOuverture;
    }

    /**
     * @return string
     */
    public function getSoldeSoumis()
    {
        return $this->soldeSoumis;
    }

    /**
     * @param string $soldeSoumis
     */
    public function setSoldeSoumis($soldeSoumis)
    {
        $this->soldeSoumis = $soldeSoumis;
    }

    /**
     * @return string
     */
    public function getInteretDebiteur()
    {
        return $this->interetDebiteur;
    }

    /**
     * @param string $interetDebiteur
     */
    public function setInteretDebiteur($interetDebiteur)
    {
        $this->interetDebiteur = $interetDebiteur;
    }




}

