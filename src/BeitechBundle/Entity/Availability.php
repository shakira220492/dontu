<?php

namespace BeitechBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Availability
 *
 * @ORM\Table(name="availability", indexes={@ORM\Index(name="id_client", columns={"id_user"}), @ORM\Index(name="id_product", columns={"id_product"})})
 * @ORM\Entity
 */
class Availability
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_availability", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idAvailability;

    /**
     * @var string
     *
     * @ORM\Column(name="status_availability", type="string", length=50, nullable=false)
     */
    private $statusAvailability;

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
     * @var \Product
     *
     * @ORM\ManyToOne(targetEntity="Product")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_product", referencedColumnName="id_product")
     * })
     */
    private $idProduct;



    /**
     * Get idAvailability
     *
     * @return integer 
     */
    public function getIdAvailability()
    {
        return $this->idAvailability;
    }

    /**
     * Set statusAvailability
     *
     * @param string $statusAvailability
     * @return Availability
     */
    public function setStatusAvailability($statusAvailability)
    {
        $this->statusAvailability = $statusAvailability;

        return $this;
    }

    /**
     * Get statusAvailability
     *
     * @return string 
     */
    public function getStatusAvailability()
    {
        return $this->statusAvailability;
    }

    /**
     * Set idUser
     *
     * @param \BeitechBundle\Entity\User $idUser
     * @return Availability
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

    /**
     * Set idProduct
     *
     * @param \BeitechBundle\Entity\Product $idProduct
     * @return Availability
     */
    public function setIdProduct(\BeitechBundle\Entity\Product $idProduct = null)
    {
        $this->idProduct = $idProduct;

        return $this;
    }

    /**
     * Get idProduct
     *
     * @return \BeitechBundle\Entity\Product 
     */
    public function getIdProduct()
    {
        return $this->idProduct;
    }
}
