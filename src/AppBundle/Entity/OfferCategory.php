<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OfferCategory
 *
 * @ORM\Table(name="offer_category")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\OfferCategoryRepository")
 */
class OfferCategory
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
     * @ORM\Column(name="NameCategory", type="string", length=255, unique=true)
     */
    private $nameCategory;

    /**
     * @var string
     *
     * @ORM\Column(name="CreatedDate", type="string", length=255)
     */
    private $createdDate;

    /**
     * @var string
     *
     * @ORM\Column(name="UpdatedDate", type="string", length=255)
     */
    private $updatedDate;


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
     * Set nameCategory
     *
     * @param string $nameCategory
     *
     * @return OfferCategory
     */
    public function setNameCategory($nameCategory)
    {
        $this->nameCategory = $nameCategory;

        return $this;
    }

    /**
     * Get nameCategory
     *
     * @return string
     */
    public function getNameCategory()
    {
        return $this->nameCategory;
    }

    /**
     * Set createdDate
     *
     * @param string $createdDate
     *
     * @return OfferCategory
     */
    public function setCreatedDate($createdDate)
    {
        $this->createdDate = $createdDate;

        return $this;
    }

    /**
     * Get createdDate
     *
     * @return string
     */
    public function getCreatedDate()
    {
        return $this->createdDate;
    }

    /**
     * Set updatedDate
     *
     * @param string $updatedDate
     *
     * @return OfferCategory
     */
    public function setUpdatedDate($updatedDate)
    {
        $this->updatedDate = $updatedDate;

        return $this;
    }

    /**
     * Get updatedDate
     *
     * @return string
     */
    public function getUpdatedDate()
    {
        return $this->updatedDate;
    }
}

