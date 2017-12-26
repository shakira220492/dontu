<?php

namespace BeitechBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserKeyword
 *
 * @ORM\Table(name="user_keyword", indexes={@ORM\Index(name="id_keyword", columns={"id_keyword"}), @ORM\Index(name="id_user", columns={"id_user"})})
 * @ORM\Entity
 */
class UserKeyword
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_user_keyword", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idUserKeyword;

    /**
     * @var \Keyword
     *
     * @ORM\ManyToOne(targetEntity="Keyword")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_keyword", referencedColumnName="id_keyword")
     * })
     */
    private $idKeyword;

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
     * Get idUserKeyword
     *
     * @return integer 
     */
    public function getIdUserKeyword()
    {
        return $this->idUserKeyword;
    }

    /**
     * Set idKeyword
     *
     * @param \BeitechBundle\Entity\Keyword $idKeyword
     * @return UserKeyword
     */
    public function setIdKeyword(\BeitechBundle\Entity\Keyword $idKeyword = null)
    {
        $this->idKeyword = $idKeyword;

        return $this;
    }

    /**
     * Get idKeyword
     *
     * @return \BeitechBundle\Entity\Keyword 
     */
    public function getIdKeyword()
    {
        return $this->idKeyword;
    }

    /**
     * Set idUser
     *
     * @param \BeitechBundle\Entity\User $idUser
     * @return UserKeyword
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
