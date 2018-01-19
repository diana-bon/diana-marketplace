<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OffersSubCategory
 *
 * @ORM\Table(name="offers_sub_category")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\OffersSubCategoryRepository")
 */
class OffersSubCategory
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
     * @ORM\Column(name="IdCategory", type="string", length=255, unique=true)
     */
    private $idCategory;

    /**
     * @var string
     *
     * @ORM\Column(name="NameSubcategory", type="string", length=255, unique=true)
     */
    private $nameSubcategory;

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
     * Set idCategory
     *
     * @param string $idCategory
     *
     * @return OffersSubCategory
     */
    public function setIdCategory($idCategory)
    {
        $this->idCategory = $idCategory;

        return $this;
    }

    /**
     * Get idCategory
     *
     * @return string
     */
    public function getIdCategory()
    {
        return $this->idCategory;
    }

    /**
     * Set nameSubcategory
     *
     * @param string $nameSubcategory
     *
     * @return OffersSubCategory
     */
    public function setNameSubcategory($nameSubcategory)
    {
        $this->nameSubcategory = $nameSubcategory;

        return $this;
    }

    /**
     * Get nameSubcategory
     *
     * @return string
     */
    public function getNameSubcategory()
    {
        return $this->nameSubcategory;
    }

    /**
     * Set createdDate
     *
     * @param string $createdDate
     *
     * @return OffersSubCategory
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
     * @return OffersSubCategory
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

