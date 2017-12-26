<?php

namespace BeitechBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Visit
 *
 * @ORM\Table(name="visit")
 * @ORM\Entity
 */
class Visit
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_visit", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idVisit;

    /**
     * @var string
     *
     * @ORM\Column(name="hour_visit", type="string", length=20, nullable=false)
     */
    private $hourVisit;

    /**
     * @var string
     *
     * @ORM\Column(name="geolocalization_visit", type="string", length=50, nullable=false)
     */
    private $geolocalizationVisit;



    /**
     * Get idVisit
     *
     * @return integer 
     */
    public function getIdVisit()
    {
        return $this->idVisit;
    }

    /**
     * Set hourVisit
     *
     * @param string $hourVisit
     * @return Visit
     */
    public function setHourVisit($hourVisit)
    {
        $this->hourVisit = $hourVisit;

        return $this;
    }

    /**
     * Get hourVisit
     *
     * @return string 
     */
    public function getHourVisit()
    {
        return $this->hourVisit;
    }

    /**
     * Set geolocalizationVisit
     *
     * @param string $geolocalizationVisit
     * @return Visit
     */
    public function setGeolocalizationVisit($geolocalizationVisit)
    {
        $this->geolocalizationVisit = $geolocalizationVisit;

        return $this;
    }

    /**
     * Get geolocalizationVisit
     *
     * @return string 
     */
    public function getGeolocalizationVisit()
    {
        return $this->geolocalizationVisit;
    }
}
