<?php

namespace Rottenwood\BookingBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BookingTime
 * @ORM\Table(name="booking_time")
 * @ORM\Entity(repositoryClass="Rottenwood\BookingBundle\Repository\BookingTimeRepository")
 */
class BookingTime
{
    /**
     * @var integer
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime
     * @ORM\Column(name="from_date", type="datetime")
     */
    private $fromDate;

    /**
     * @var \DateTime
     * @ORM\Column(name="till_date", type="datetime")
     */
    private $tillDate;

    /**
     * @var string
     * @ORM\Column(name="tenant", type="string", length=255)
     */
    private $tenant;


    /**
     * Get id
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set fromDate
     * @param \DateTime $fromDate
     * @return BookingTime
     */
    public function setFromDate($fromDate)
    {
        $this->fromDate = $fromDate;

        return $this;
    }

    /**
     * Get fromDate
     * @return \DateTime
     */
    public function getFromDate()
    {
        return $this->fromDate;
    }

    /**
     * Set tillDate
     * @param \DateTime $tillDate
     * @return BookingTime
     */
    public function setTillDate($tillDate)
    {
        $this->tillDate = $tillDate;

        return $this;
    }

    /**
     * Get tillDate
     * @return \DateTime
     */
    public function getTillDate()
    {
        return $this->tillDate;
    }

    /**
     * Set tenant
     * @param string $tenant
     * @return BookingTime
     */
    public function setTenant($tenant)
    {
        $this->tenant = $tenant;

        return $this;
    }

    /**
     * Get tenant
     * @return string
     */
    public function getTenant()
    {
        return $this->tenant;
    }
}
