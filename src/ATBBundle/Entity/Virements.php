<?php

namespace ATBBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Virements
 *
 * @ORM\Table(name="virements")
 * @ORM\Entity
 */
class Virements
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="num_compte_d", type="string", length=255, nullable=false)
     */
    private $numCompteD;

    /**
     * @var string
     *
     * @ORM\Column(name="num_compte_b", type="string", length=255, nullable=false)
     */
    private $numCompteB;

    /**
     * @var float
     *
     * @ORM\Column(name="montant_virement", type="float", length=255, nullable=false)
     */
    private $montantVirement;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_virement", type="date", nullable=false)
     */
    private $dateVirement;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_client", type="integer", nullable=false)
     */
    private $idClient;

    /**
     * Virements constructor.
     * @param int $id
     * @param string $numCompteD
     * @param string $numCompteB
     * @param string $montantVirement
     * @param \DateTime $dateVirement
     * @param int $idClient
     */
    public function Virements($id, $numCompteD, $numCompteB, $montantVirement, \DateTime $dateVirement, $idClient)
    {
        $this->id = $id;
        $this->numCompteD = $numCompteD;
        $this->numCompteB = $numCompteB;
        $this->montantVirement = $montantVirement;
        $this->dateVirement = $dateVirement;
        $this->idClient = $idClient;
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

    /**
     * @return string
     */
    public function getNumCompteD()
    {
        return $this->numCompteD;
    }

    /**
     * @param string $numCompteD
     */
    public function setNumCompteD($numCompteD)
    {
        $this->numCompteD = $numCompteD;
    }

    /**
     * @return string
     */
    public function getNumCompteB()
    {
        return $this->numCompteB;
    }

    /**
     * @param string $numCompteB
     */
    public function setNumCompteB($numCompteB)
    {
        $this->numCompteB = $numCompteB;
    }

    /**
     * @return float
     */
    public function getMontantVirement()
    {
        return $this->montantVirement;
    }

    /**
     * @param floatX $montantVirement
     */
    public function setMontantVirement($montantVirement)
    {
        $this->montantVirement = $montantVirement;
    }

    /**
     * @return \DateTime
     */
    public function getDateVirement()
    {
        return $this->dateVirement;
    }

    /**
     * @param \DateTime $dateVirement
     */
    public function setDateVirement($dateVirement)
    {
        $this->dateVirement = $dateVirement;
    }

    /**
     * @return int
     */
    public function getIdClient()
    {
        return $this->idClient;
    }

    /**
     * @param int $idClient
     */
    public function setIdClient($idClient)
    {
        $this->idClient = $idClient;
    }




}

