<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserOfferBookmarker
 *
 * @ORM\Table(name="user_offer_bookmarker")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UserOfferBookmarkerRepository")
 */
class UserOfferBookmarker
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
     * @ORM\Column(name="ID_User", type="string", length=255, unique=true)
     */
    private $iDUser;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_Bookmark", type="string", length=255, unique=true)
     */
    private $iDBookmark;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_Offer", type="string", length=255, unique=true)
     */
    private $iDOffer;

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
     * Set iDUser
     *
     * @param string $iDUser
     *
     * @return UserOfferBookmarker
     */
    public function setIDUser($iDUser)
    {
        $this->iDUser = $iDUser;

        return $this;
    }

    /**
     * Get iDUser
     *
     * @return string
     */
    public function getIDUser()
    {
        return $this->iDUser;
    }

    /**
     * Set iDBookmark
     *
     * @param string $iDBookmark
     *
     * @return UserOfferBookmarker
     */
    public function setIDBookmark($iDBookmark)
    {
        $this->iDBookmark = $iDBookmark;

        return $this;
    }

    /**
     * Get iDBookmark
     *
     * @return string
     */
    public function getIDBookmark()
    {
        return $this->iDBookmark;
    }

    /**
     * Set iDOffer
     *
     * @param string $iDOffer
     *
     * @return UserOfferBookmarker
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
     * Set createdDate
     *
     * @param string $createdDate
     *
     * @return UserOfferBookmarker
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
     * @return UserOfferBookmarker
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

