<?php

namespace ATBBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Autorisations
 *
 * @ORM\Table(name="autorisations")
 * @ORM\Entity
 */
class Autorisations
{

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="cards")
     * @ORM\JoinColumn(name="num_carte",referencedColumnName="num_carte")
     */
    private $numCarte;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date", nullable=false)
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255, nullable=false)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="lieu", type="string", length=255, nullable=false)
     */
    private $lieu;

    /**
     * @var string
     *
     * @ORM\Column(name="pays", type="string", length=255, nullable=false)
     */
    private $pays;

    /**
     * @var string
     *
     * @ORM\Column(name="montant", type="string", length=255, nullable=false)
     */
    private $montant;

    /**
     * @var string
     *
     * @ORM\Column(name="montant_origine", type="string", length=255, nullable=false)
     */
    private $montantOrigine;

    /**
     * @var string
     *
     * @ORM\Column(name="devise_origine", type="string", length=255, nullable=false)
     */
    private $deviseOrigine;

    /**
     * @var string
     *
     * @ORM\Column(name="statut", type="string", length=255, nullable=false)
     */
    private $statut;

    /**
     * Autorisations constructor.
     * @param $numCarte
     * @param \DateTime $date
     * @param string $type
     * @param string $lieu
     * @param string $pays
     * @param string $montant
     * @param string $montantOrigine
     * @param string $deviseOrigine
     * @param string $statut
     */
    public function Autorisations($id,$numCarte, \DateTime $date, $type, $lieu, $pays, $montant, $montantOrigine, $deviseOrigine, $statut)
    {
        $this->id = $id;
        $this->numCarte = $numCarte;
        $this->date = $date;
        $this->type = $type;
        $this->lieu = $lieu;
        $this->pays = $pays;
        $this->montant = $montant;
        $this->montantOrigine = $montantOrigine;
        $this->deviseOrigine = $deviseOrigine;
        $this->statut = $statut;
    }

    /**
     * @return mixed
     */
    public function getNumCarte()
    {
        return $this->numCarte;
    }

    /**
     * @param mixed $numCarte
     */
    public function setNumCarte($numCarte)
    {
        $this->numCarte = $numCarte;
    }

    /**
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param \DateTime $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function getLieu()
    {
        return $this->lieu;
    }

    /**
     * @param string $lieu
     */
    public function setLieu($lieu)
    {
        $this->lieu = $lieu;
    }

    /**
     * @return string
     */
    public function getPays()
    {
        return $this->pays;
    }

    /**
     * @param string $pays
     */
    public function setPays($pays)
    {
        $this->pays = $pays;
    }

    /**
     * @return string
     */
    public function getMontant()
    {
        return $this->montant;
    }

    /**
     * @param string $montant
     */
    public function setMontant($montant)
    {
        $this->montant = $montant;
    }

    /**
     * @return string
     */
    public function getMontantOrigine()
    {
        return $this->montantOrigine;
    }

    /**
     * @param string $montantOrigine
     */
    public function setMontantOrigine($montantOrigine)
    {
        $this->montantOrigine = $montantOrigine;
    }

    /**
     * @return string
     */
    public function getDeviseOrigine()
    {
        return $this->deviseOrigine;
    }

    /**
     * @param string $deviseOrigine
     */
    public function setDeviseOrigine($deviseOrigine)
    {
        $this->deviseOrigine = $deviseOrigine;
    }

    /**
     * @return string
     */
    public function getStatut()
    {
        return $this->statut;
    }

    /**
     * @param string $statut
     */
    public function setStatut($statut)
    {
        $this->statut = $statut;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }





}

