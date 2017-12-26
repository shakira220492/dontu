<?php

namespace BeitechBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Setlist
 *
 * @ORM\Table(name="setlist", indexes={@ORM\Index(name="id_user", columns={"id_user"})})
 * @ORM\Entity
 */
class Setlist
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_setlist", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idSetlist;

    /**
     * @var string
     *
     * @ORM\Column(name="delivery_address_setlist", type="string", length=255, nullable=false)
     */
    private $deliveryAddressSetlist;

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
     * Get idSetlist
     *
     * @return integer 
     */
    public function getIdSetlist()
    {
        return $this->idSetlist;
    }

    /**
     * Set deliveryAddressSetlist
     *
     * @param string $deliveryAddressSetlist
     * @return Setlist
     */
    public function setDeliveryAddressSetlist($deliveryAddressSetlist)
    {
        $this->deliveryAddressSetlist = $deliveryAddressSetlist;

        return $this;
    }

    /**
     * Get deliveryAddressSetlist
     *
     * @return string 
     */
    public function getDeliveryAddressSetlist()
    {
        return $this->deliveryAddressSetlist;
    }

    /**
     * Set idUser
     *
     * @param \BeitechBundle\Entity\User $idUser
     * @return Setlist
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
