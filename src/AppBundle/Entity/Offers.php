<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Offers
 *
 * @ORM\Table(name="offers")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\OffersRepository")
 */
class Offers
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
     * @ORM\Column(name="Title", type="string", length=255, unique=true)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="Description", type="string", length=255)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="Image", type="string", length=255)
     */
    private $image;

    /**
     * @var string
     *
     * @ORM\Column(name="Price", type="string", length=255)
     */
    private $price;

    /**
     * @var string
     *
     * @ORM\Column(name="Status_AbleDisable", type="string", length=255)
     */
    private $statusAbleDisable;

    /**
     * @var string
     *
     * @ORM\Column(name="ZipCode", type="string", length=255)
     */
    private $zipCode;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_Subcategory", type="string", length=255, unique=true)
     */
    private $iDSubcategory;

    /**
     * @var string
     *
     * @ORM\Column(name="NumberOfViews", type="string", length=255)
     */
    private $numberOfViews;

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
     * Set title
     *
     * @param string $title
     *
     * @return Offers
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Offers
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set image
     *
     * @param string $image
     *
     * @return Offers
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set price
     *
     * @param string $price
     *
     * @return Offers
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
     * Set statusAbleDisable
     *
     * @param string $statusAbleDisable
     *
     * @return Offers
     */
    public function setStatusAbleDisable($statusAbleDisable)
    {
        $this->statusAbleDisable = $statusAbleDisable;

        return $this;
    }

    /**
     * Get statusAbleDisable
     *
     * @return string
     */
    public function getStatusAbleDisable()
    {
        return $this->statusAbleDisable;
    }

    /**
     * Set zipCode
     *
     * @param string $zipCode
     *
     * @return Offers
     */
    public function setZipCode($zipCode)
    {
        $this->zipCode = $zipCode;

        return $this;
    }

    /**
     * Get zipCode
     *
     * @return string
     */
    public function getZipCode()
    {
        return $this->zipCode;
    }

    /**
     * Set iDSubcategory
     *
     * @param string $iDSubcategory
     *
     * @return Offers
     */
    public function setIDSubcategory($iDSubcategory)
    {
        $this->iDSubcategory = $iDSubcategory;

        return $this;
    }

    /**
     * Get iDSubcategory
     *
     * @return string
     */
    public function getIDSubcategory()
    {
        return $this->iDSubcategory;
    }

    /**
     * Set numberOfViews
     *
     * @param string $numberOfViews
     *
     * @return Offers
     */
    public function setNumberOfViews($numberOfViews)
    {
        $this->numberOfViews = $numberOfViews;

        return $this;
    }

    /**
     * Get numberOfViews
     *
     * @return string
     */
    public function getNumberOfViews()
    {
        return $this->numberOfViews;
    }

    /**
     * Set createdDate
     *
     * @param string $createdDate
     *
     * @return Offers
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
     * @return Offers
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

