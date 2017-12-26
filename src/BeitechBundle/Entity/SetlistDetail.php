<?php

namespace BeitechBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SetlistDetail
 *
 * @ORM\Table(name="setlist_detail", indexes={@ORM\Index(name="id_product", columns={"id_product"}), @ORM\Index(name="id_list", columns={"id_setlist"})})
 * @ORM\Entity
 */
class SetlistDetail
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_setlist_detail", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idSetlistDetail;

    /**
     * @var integer
     *
     * @ORM\Column(name="amount_product_setlist_detail", type="integer", nullable=false)
     */
    private $amountProductSetlistDetail;

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
     * @var \Setlist
     *
     * @ORM\ManyToOne(targetEntity="Setlist")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_setlist", referencedColumnName="id_setlist")
     * })
     */
    private $idSetlist;



    /**
     * Get idSetlistDetail
     *
     * @return integer 
     */
    public function getIdSetlistDetail()
    {
        return $this->idSetlistDetail;
    }

    /**
     * Set amountProductSetlistDetail
     *
     * @param integer $amountProductSetlistDetail
     * @return SetlistDetail
     */
    public function setAmountProductSetlistDetail($amountProductSetlistDetail)
    {
        $this->amountProductSetlistDetail = $amountProductSetlistDetail;

        return $this;
    }

    /**
     * Get amountProductSetlistDetail
     *
     * @return integer 
     */
    public function getAmountProductSetlistDetail()
    {
        return $this->amountProductSetlistDetail;
    }

    /**
     * Set idProduct
     *
     * @param \BeitechBundle\Entity\Product $idProduct
     * @return SetlistDetail
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

    /**
     * Set idSetlist
     *
     * @param \BeitechBundle\Entity\Setlist $idSetlist
     * @return SetlistDetail
     */
    public function setIdSetlist(\BeitechBundle\Entity\Setlist $idSetlist = null)
    {
        $this->idSetlist = $idSetlist;

        return $this;
    }

    /**
     * Get idSetlist
     *
     * @return \BeitechBundle\Entity\Setlist 
     */
    public function getIdSetlist()
    {
        return $this->idSetlist;
    }
}
