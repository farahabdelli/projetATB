<?php

namespace ATBBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Transactions
 *
 * @ORM\Table(name="transactions")
 * @ORM\Entity(repositoryClass="ATBBundle\Repository\HistoriqueRepository")
 */
class Transactions
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
     * @ORM\Column(name="type_transaction", type="string", length=255, nullable=false)
     */
    private $typeTransaction;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_transaction", type="date", nullable=false)
     */
    private $dateTransaction;

    /**
     * @var string
     *
     * @ORM\Column(name="montant", type="string", length=255, nullable=false)
     */
    private $montant;

    /**
     * @var string
     *
     * @ORM\Column(name="intitule", type="string", length=255, nullable=false)
     */
    private $intitule;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_valeur", type="date", nullable=false)
     */
    private $dateValeur;

    /**
     * @var string
     *
     * @ORM\Column(name="debit", type="string", length=255, nullable=false)
     */
    private $debit;

    /**
     * @var string
     *
     * @ORM\Column(name="credit", type="string", length=255, nullable=false)
     */
    private $credit;

    /**
     * @ORM\ManyToOne(targetEntity="Accounts")
     * @ORM\JoinColumn(name="num_compte",referencedColumnName="num_compte")
     */

    private $numCompte;

    /**
     * Transactions constructor.
     * @param int $id
     * @param string $typeTransaction
     * @param \DateTime $dateTransaction
     * @param string $montant
     * @param string $intitule
     * @param \DateTime $dateValeur
     * @param string $debit
     * @param string $credit
     * @param $numCompte
     */
    public function Transactions($id, $typeTransaction, \DateTime $dateTransaction, $montant, $intitule, \DateTime $dateValeur, $debit, $credit, $numCompte)
    {
        $this->id = $id;
        $this->typeTransaction = $typeTransaction;
        $this->dateTransaction = $dateTransaction;
        $this->montant = $montant;
        $this->intitule = $intitule;
        $this->dateValeur = $dateValeur;
        $this->debit = $debit;
        $this->credit = $credit;
        $this->numCompte = $numCompte;
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
    public function getTypeTransaction()
    {
        return $this->typeTransaction;
    }

    /**
     * @param string $typeTransaction
     */
    public function setTypeTransaction($typeTransaction)
    {
        $this->typeTransaction = $typeTransaction;
    }

    /**
     * @return \DateTime
     */
    public function getDateTransaction()
    {
        return $this->dateTransaction;
    }

    /**
     * @param \DateTime $dateTransaction
     */
    public function setDateTransaction($dateTransaction)
    {
        $this->dateTransaction = $dateTransaction;
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
    public function getIntitule()
    {
        return $this->intitule;
    }

    /**
     * @param string $intitule
     */
    public function setIntitule($intitule)
    {
        $this->intitule = $intitule;
    }

    /**
     * @return \DateTime
     */
    public function getDateValeur()
    {
        return $this->dateValeur;
    }

    /**
     * @param \DateTime $dateValeur
     */
    public function setDateValeur($dateValeur)
    {
        $this->dateValeur = $dateValeur;
    }

    /**
     * @return string
     */
    public function getDebit()
    {
        return $this->debit;
    }

    /**
     * @param string $debit
     */
    public function setDebit($debit)
    {
        $this->debit = $debit;
    }

    /**
     * @return string
     */
    public function getCredit()
    {
        return $this->credit;
    }

    /**
     * @param string $credit
     */
    public function setCredit($credit)
    {
        $this->credit = $credit;
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





}

