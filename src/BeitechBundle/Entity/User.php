<?php

namespace BeitechBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity
 */
class User
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_user", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idUser;

    /**
     * @var string
     *
     * @ORM\Column(name="user_name_user", type="string", length=100, nullable=false)
     */
    private $userNameUser;

    /**
     * @var string
     *
     * @ORM\Column(name="first_name_user", type="string", length=255, nullable=false)
     */
    private $firstNameUser;

    /**
     * @var string
     *
     * @ORM\Column(name="last_name_user", type="string", length=255, nullable=false)
     */
    private $lastNameUser;

    /**
     * @var integer
     *
     * @ORM\Column(name="mobile_number_user", type="integer", nullable=false)
     */
    private $mobileNumberUser;

    /**
     * @var string
     *
     * @ORM\Column(name="password_user", type="text", length=65535, nullable=false)
     */
    private $passwordUser;

    /**
     * @var string
     *
     * @ORM\Column(name="birthday_user", type="string", length=20, nullable=false)
     */
    private $birthdayUser;

    /**
     * @var string
     *
     * @ORM\Column(name="genre_user", type="string", length=10, nullable=false)
     */
    private $genreUser;



    /**
     * Get idUser
     *
     * @return integer 
     */
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * Set userNameUser
     *
     * @param string $userNameUser
     * @return User
     */
    public function setUserNameUser($userNameUser)
    {
        $this->userNameUser = $userNameUser;

        return $this;
    }

    /**
     * Get userNameUser
     *
     * @return string 
     */
    public function getUserNameUser()
    {
        return $this->userNameUser;
    }

    /**
     * Set firstNameUser
     *
     * @param string $firstNameUser
     * @return User
     */
    public function setFirstNameUser($firstNameUser)
    {
        $this->firstNameUser = $firstNameUser;

        return $this;
    }

    /**
     * Get firstNameUser
     *
     * @return string 
     */
    public function getFirstNameUser()
    {
        return $this->firstNameUser;
    }

    /**
     * Set lastNameUser
     *
     * @param string $lastNameUser
     * @return User
     */
    public function setLastNameUser($lastNameUser)
    {
        $this->lastNameUser = $lastNameUser;

        return $this;
    }

    /**
     * Get lastNameUser
     *
     * @return string 
     */
    public function getLastNameUser()
    {
        return $this->lastNameUser;
    }

    /**
     * Set mobileNumberUser
     *
     * @param integer $mobileNumberUser
     * @return User
     */
    public function setMobileNumberUser($mobileNumberUser)
    {
        $this->mobileNumberUser = $mobileNumberUser;

        return $this;
    }

    /**
     * Get mobileNumberUser
     *
     * @return integer 
     */
    public function getMobileNumberUser()
    {
        return $this->mobileNumberUser;
    }

    /**
     * Set passwordUser
     *
     * @param string $passwordUser
     * @return User
     */
    public function setPasswordUser($passwordUser)
    {
        $this->passwordUser = $passwordUser;

        return $this;
    }

    /**
     * Get passwordUser
     *
     * @return string 
     */
    public function getPasswordUser()
    {
        return $this->passwordUser;
    }

    /**
     * Set birthdayUser
     *
     * @param string $birthdayUser
     * @return User
     */
    public function setBirthdayUser($birthdayUser)
    {
        $this->birthdayUser = $birthdayUser;

        return $this;
    }

    /**
     * Get birthdayUser
     *
     * @return string 
     */
    public function getBirthdayUser()
    {
        return $this->birthdayUser;
    }

    /**
     * Set genreUser
     *
     * @param string $genreUser
     * @return User
     */
    public function setGenreUser($genreUser)
    {
        $this->genreUser = $genreUser;

        return $this;
    }

    /**
     * Get genreUser
     *
     * @return string 
     */
    public function getGenreUser()
    {
        return $this->genreUser;
    }
}
