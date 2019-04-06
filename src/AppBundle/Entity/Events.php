<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Events
 *
 * @ORM\Table(name="events")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\EventsRepository")
 */
class Events
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
     * @ORM\Column(name="eventName", type="string", length=55)
     */
    private $eventName;

    /**
     * @var string
     *
     * @ORM\Column(name="eventDate", type="string", length=55)
     */
    private $eventDate;

    /**
     * @var string
     *
     * @ORM\Column(name="eventImage", type="string", length=255)
     */
    private $eventImage;

    /**
     * @var int
     *
     * @ORM\Column(name="eventCapacity", type="string", length=55)
     */
    private $eventCapacity;

    /**
     * @var string
     *
     * @ORM\Column(name="eventEmail", type="string", length=55)
     */
    private $eventEmail;

    /**
     * @var int
     *
     * @ORM\Column(name="eventPhone", type="string", length=55)
     */
    private $eventPhone;

    /**
     * @var string
     *
     * @ORM\Column(name="eventAddress", type="string", length=55)
     */
    private $eventAddress;

    /**
     * @var int
     *
     * @ORM\Column(name="eventZIP", type="integer")
     */
    private $eventZIP;

    /**
     * @var string
     *
     * @ORM\Column(name="eventCity", type="string", length=55)
     */
    private $eventCity;

    /**
     * @var string
     *
     * @ORM\Column(name="eventURL", type="string", length=255)
     */
    private $eventURL;

    /**
     * @var string
     *
     * @ORM\Column(name="eventType", type="string", length=55)
     */
    private $eventType;


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
     * Set eventName
     *
     * @param string $eventName
     *
     * @return Events
     */
    public function setEventName($eventName)
    {
        $this->eventName = $eventName;

        return $this;
    }

    /**
     * Get eventName
     *
     * @return string
     */
    public function getEventName()
    {
        return $this->eventName;
    }

    /**
     * Set eventDate
     *
     * @param \DateTime $eventDate
     *
     * @return Events
     */
    public function setEventDate($eventDate)
    {
        $this->eventDate = $eventDate;

        return $this;
    }

    /**
     * Get eventDate
     *
     * @return \DateTime
     */
    public function getEventDate()
    {
        return $this->eventDate;
    }

    /**
     * Set eventImage
     *
     * @param string $eventImage
     *
     * @return Events
     */
    public function setEventImage($eventImage)
    {
        $this->eventImage = $eventImage;

        return $this;
    }

    /**
     * Get eventImage
     *
     * @return string
     */
    public function getEventImage()
    {
        return $this->eventImage;
    }

    /**
     * Set eventCapacity
     *
     * @param integer $eventCapacity
     *
     * @return Events
     */
    public function setEventCapacity($eventCapacity)
    {
        $this->eventCapacity = $eventCapacity;

        return $this;
    }

    /**
     * Get eventCapacity
     *
     * @return int
     */
    public function getEventCapacity()
    {
        return $this->eventCapacity;
    }

    /**
     * Set eventEmail
     *
     * @param string $eventEmail
     *
     * @return Events
     */
    public function setEventEmail($eventEmail)
    {
        $this->eventEmail = $eventEmail;

        return $this;
    }

    /**
     * Get eventEmail
     *
     * @return string
     */
    public function getEventEmail()
    {
        return $this->eventEmail;
    }

    /**
     * Set eventPhone
     *
     * @param integer $eventPhone
     *
     * @return Events
     */
    public function setEventPhone($eventPhone)
    {
        $this->eventPhone = $eventPhone;

        return $this;
    }

    /**
     * Get eventPhone
     *
     * @return int
     */
    public function getEventPhone()
    {
        return $this->eventPhone;
    }

    /**
     * Set eventAddress
     *
     * @param string $eventAddress
     *
     * @return Events
     */
    public function setEventAddress($eventAddress)
    {
        $this->eventAddress = $eventAddress;

        return $this;
    }

    /**
     * Get eventAddress
     *
     * @return string
     */
    public function getEventAddress()
    {
        return $this->eventAddress;
    }

    /**
     * Set eventZIP
     *
     * @param integer $eventZIP
     *
     * @return Events
     */
    public function setEventZIP($eventZIP)
    {
        $this->eventZIP = $eventZIP;

        return $this;
    }

    /**
     * Get eventZIP
     *
     * @return int
     */
    public function getEventZIP()
    {
        return $this->eventZIP;
    }

    /**
     * Set eventCity
     *
     * @param string $eventCity
     *
     * @return Events
     */
    public function setEventCity($eventCity)
    {
        $this->eventCity = $eventCity;

        return $this;
    }

    /**
     * Get eventCity
     *
     * @return string
     */
    public function getEventCity()
    {
        return $this->eventCity;
    }

    /**
     * Set eventURL
     *
     * @param string $eventURL
     *
     * @return Events
     */
    public function setEventURL($eventURL)
    {
        $this->eventURL = $eventURL;

        return $this;
    }

    /**
     * Get eventURL
     *
     * @return string
     */
    public function getEventURL()
    {
        return $this->eventURL;
    }

    /**
     * Set eventType
     *
     * @param string $eventType
     *
     * @return Events
     */
    public function setEventType($eventType)
    {
        $this->eventType = $eventType;

        return $this;
    }

    /**
     * Get eventType
     *
     * @return string
     */
    public function getEventType()
    {
        return $this->eventType;
    }
}

