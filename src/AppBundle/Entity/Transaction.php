<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Transaction
 *
 * @ORM\Table(name="transaction")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TransactionRepository")
 */
class Transaction
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_UserSource", type="string", length=255, unique=true)
     */
    private $iDSourceUser;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_DestinationUser", type="string", length=255, unique=true)
     */
    private $iDDestinationUser;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_Offer", type="string", length=255, unique=true)
     */
    private $iDOffer;

    /**
     * @var string
     *
     * @ORM\Column(name="Date", type="string", length=255)
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="Price", type="string", length=255)
     */
    private $price;

    /**
     * @var string
     *
     * @ORM\Column(name="Commission", type="string", length=255)
     */
    private $commission;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set iDUserSource
     *
     * @param string $iDUserSource
     *
     * @return Transaction
     */
    public function setIDUserSource($iDUserSource)
    {
        $this->iDUserSource = $iDUserSource;

        return $this;
    }

    /**
     * Get iDUserSource
     *
     * @return string
     */
    public function getIDUserSource()
    {
        return $this->iDUserSource;
    }

    /**
     * Set iDDestinationUser
     *
     * @param string $iDDestinationUser
     *
     * @return Transaction
     */
    public function setIDDestinationUser($iDDestinationUser)
    {
        $this->iDDestinationUser = $iDDestinationUser;

        return $this;
    }

    /**
     * Get iDDestinationUser
     *
     * @return string
     */
    public function getIDDestinationUser()
    {
        return $this->iDDestinationUser;
    }

    /**
     * Set iDOffer
     *
     * @param string $iDOffer
     *
     * @return Transaction
     */
    public function setIDOffer($iDOffer)
    {
        $this->iDOffer = $iDOffer;

        return $this;
    }

    /**
     * Get iDOffer
     *
     * @return string
     */
    public function getIDOffer()
    {
        return $this->iDOffer;
    }

    /**
     * Set date
     *
     * @param string $date
     *
     * @return Transaction
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return string
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set price
     *
     * @param string $price
     *
     * @return Transaction
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return string
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set commission
     *
     * @param string $commission
     *
     * @return Transaction
     */
    public function setCommission($commission)
    {
        $this->commission = $commission;

        return $this;
    }

    /**
     * Get commission
     *
     * @return string
     */
    public function getCommission()
    {
        return $this->commission;
    }
}

