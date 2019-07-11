<?php

namespace ATBBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cards
 *
 * @ORM\Table(name="cards")
 * @ORM\Entity(repositoryClass="ATBBundle\Repository\CardsRepository")
 */
class Cards
{
    /**
     * @var string
     *
     * @ORM\Column(name="num_carte", type="string", length=255, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $numCarte;

    /**
     * @var string
     *
     * @ORM\Column(name="type_carte", type="string", length=255, nullable=false)
     */
    private $typeCarte;

    /**
     * @ORM\ManyToOne(targetEntity="Accounts")
     * @ORM\JoinColumn(name="num_compte",referencedColumnName="num_compte")
     */
    private $numCompte;

    /**
     * @var string
     *
     * @ORM\Column(name="porteur", type="string", length=255, nullable=false)
     */
    private $porteur;

    /**
     * @var string
     *
     * @ORM\Column(name="plafond", type="string", length=255, nullable=false)
     */
    private $plafond;

    /**
     * @var string
     *
     * @ORM\Column(name="date_expiration", type="string", length=255, nullable=false)
     */
    private $dateExpiration;

    /**
     * @var string
     *
     * @ORM\Column(name="statut", type="string", length=255, nullable=false)
     */
    private $statut;

    /**
     * Cards constructor.
     * @param string $numCarte
     * @param string $typeCarte
     * @param $numCompte
     * @param string $porteur
     * @param string $plafond
     * @param string $dateExpiration
     * @param string $statut
     */
    public function Cards($numCarte, $typeCarte, $numCompte, $porteur, $plafond, $dateExpiration, $statut)
    {
        $this->numCarte = $numCarte;
        $this->typeCarte = $typeCarte;
        $this->numCompte = $numCompte;
        $this->porteur = $porteur;
        $this->plafond = $plafond;
        $this->dateExpiration = $dateExpiration;
        $this->statut = $statut;
    }

    /**
     * @return string
     */
    public function getNumCarte()
    {
        return $this->numCarte;
    }

    /**
     * @param string $numCarte
     */
    public function setNumCarte($numCarte)
    {
        $this->numCarte = $numCarte;
    }

    /**
     * @return string
     */
    public function getTypeCarte()
    {
        return $this->typeCarte;
    }

    /**
     * @param string $typeCarte
     */
    public function setTypeCarte($typeCarte)
    {
        $this->typeCarte = $typeCarte;
    }

    /**
     * @return mixed
     */
    public function getNumCompte()
    {
        return $this->numCompte;
    }

    /**
     * @param mixed $numCompte
     */
    public function setNumCompte($numCompte)
    {
        $this->numCompte = $numCompte;
    }

    /**
     * @return string
     */
    public function getPorteur()
    {
        return $this->porteur;
    }

    /**
     * @param string $porteur
     */
    public function setPorteur($porteur)
    {
        $this->porteur = $porteur;
    }

    /**
     * @return string
     */
    public function getPlafond()
    {
        return $this->plafond;
    }

    /**
     * @param string $plafond
     */
    public function setPlafond($plafond)
    {
        $this->plafond = $plafond;
    }

    /**
     * @return string
     */
    public function getDateExpiration()
    {
        return $this->dateExpiration;
    }

    /**
     * @param string $dateExpiration
     */
    public function setDateExpiration($dateExpiration)
    {
        $this->dateExpiration = $dateExpiration;
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




}

