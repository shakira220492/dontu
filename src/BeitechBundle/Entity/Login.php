<?php

namespace BeitechBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Login
 *
 * @ORM\Table(name="login", indexes={@ORM\Index(name="id_user", columns={"id_user"})})
 * @ORM\Entity
 */
class Login
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_login", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idLogin;

    /**
     * @var string
     *
     * @ORM\Column(name="hour_login", type="string", length=20, nullable=false)
     */
    private $hourLogin;

    /**
     * @var string
     *
     * @ORM\Column(name="geolocalization_login", type="string", length=20, nullable=false)
     */
    private $geolocalizationLogin;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_user", referencedColumnName="id_user")
     * })
     */
    private $idUser;



    /**
     * Get idLogin
     *
     * @return integer 
     */
    public function getIdLogin()
    {
        return $this->idLogin;
    }

    /**
     * Set hourLogin
     *
     * @param string $hourLogin
     * @return Login
     */
    public function setHourLogin($hourLogin)
    {
        $this->hourLogin = $hourLogin;

        return $this;
    }

    /**
     * Get hourLogin
     *
     * @return string 
     */
    public function getHourLogin()
    {
        return $this->hourLogin;
    }

    /**
     * Set geolocalizationLogin
     *
     * @param string $geolocalizationLogin
     * @return Login
     */
    public function setGeolocalizationLogin($geolocalizationLogin)
    {
        $this->geolocalizationLogin = $geolocalizationLogin;

        return $this;
    }

    /**
     * Get geolocalizationLogin
     *
     * @return string 
     */
    public function getGeolocalizationLogin()
    {
        return $this->geolocalizationLogin;
    }

    /**
     * Set idUser
     *
     * @param \BeitechBundle\Entity\User $idUser
     * @return Login
     */
    public function setIdUser(\BeitechBundle\Entity\User $idUser = null)
    {
        $this->idUser = $idUser;

        return $this;
    }

    /**
     * Get idUser
     *
     * @return \BeitechBundle\Entity\User 
     */
    public function getIdUser()
    {
        return $this->idUser;
    }
}
