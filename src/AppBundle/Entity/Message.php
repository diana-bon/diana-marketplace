<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Message
 *
 * @ORM\Table(name="message")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\MessageRepository")
 */
class Message
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
     * @ORM\Column(name="ID_Author", type="string", length=255, unique=true)
     */
    private $iDAuthor;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_SourceUser", type="string", length=255, unique=true)
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
     * @ORM\Column(name="ObjectMessage", type="string", length=255)
     */
    private $objectMessage;

    /**
     * @var string
     *
     * @ORM\Column(name="ContentMessage", type="string", length=255)
     */
    private $contentMessage;

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
     * Set iDAuthor
     *
     * @param string $iDAuthor
     *
     * @return Message
     */
    public function setIDAuthor($iDAuthor)
    {
        $this->iDAuthor = $iDAuthor;

        return $this;
    }

    /**
     * Get iDAuthor
     *
     * @return string
     */
    public function getIDAuthor()
    {
        return $this->iDAuthor;
    }

    /**
     * Set iDSourceUser
     *
     * @param string $iDSourceUser
     *
     * @return Message
     */
    public function setIDSourceUser($iDSourceUser)
    {
        $this->iDSourceUser = $iDSourceUser;

        return $this;
    }

    /**
     * Get iDSourceUser
     *
     * @return string
     */
    public function getIDSourceUser()
    {
        return $this->iDSourceUser;
    }

    /**
     * Set iDDestinationUser
     *
     * @param string $iDDestinationUser
     *
     * @return Message
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
     * Set objectMessage
     *
     * @param string $objectMessage
     *
     * @return Message
     */
    public function setObjectMessage($objectMessage)
    {
        $this->objectMessage = $objectMessage;

        return $this;
    }

    /**
     * Get objectMessage
     *
     * @return string
     */
    public function getObjectMessage()
    {
        return $this->objectMessage;
    }

    /**
     * Set contentMessage
     *
     * @param string $contentMessage
     *
     * @return Message
     */
    public function setContentMessage($contentMessage)
    {
        $this->contentMessage = $contentMessage;

        return $this;
    }

    /**
     * Get contentMessage
     *
     * @return string
     */
    public function getContentMessage()
    {
        return $this->contentMessage;
    }

    /**
     * Set createdDate
     *
     * @param string $createdDate
     *
     * @return Message
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
     * @return Message
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

