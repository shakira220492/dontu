<?php

namespace BeitechBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Product
 *
 * @ORM\Table(name="product", indexes={@ORM\Index(name="id_user", columns={"id_user"}), @ORM\Index(name="id_user_2", columns={"id_user"})})
 * @ORM\Entity
 */
class Product
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_product", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idProduct;

    /**
     * @var string
     *
     * @ORM\Column(name="name_product", type="string", length=255, nullable=false)
     */
    private $nameProduct;

    /**
     * @var string
     *
     * @ORM\Column(name="description_product", type="string", length=500, nullable=false)
     */
    private $descriptionProduct;

    /**
     * @var integer
     *
     * @ORM\Column(name="price_product", type="integer", nullable=false)
     */
    private $priceProduct;

    /**
     * @var string
     *
     * @ORM\Column(name="image_product", type="string", length=100, nullable=false)
     */
    private $imageProduct;

    /**
     * @var string
     *
     * @ORM\Column(name="video_product", type="string", length=100, nullable=false)
     */
    private $videoProduct;

    /**
     * @var integer
     *
     * @ORM\Column(name="amount_views_product", type="integer", nullable=false)
     */
    private $amountViewsProduct;

    /**
     * @var integer
     *
     * @ORM\Column(name="likes_amount_product", type="integer", nullable=false)
     */
    private $likesAmountProduct;

    /**
     * @var integer
     *
     * @ORM\Column(name="dislikes_amount_product", type="integer", nullable=false)
     */
    private $dislikesAmountProduct;

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
     * Get idProduct
     *
     * @return integer 
     */
    public function getIdProduct()
    {
        return $this->idProduct;
    }

    /**
     * Set nameProduct
     *
     * @param string $nameProduct
     * @return Product
     */
    public function setNameProduct($nameProduct)
    {
        $this->nameProduct = $nameProduct;

        return $this;
    }

    /**
     * Get nameProduct
     *
     * @return string 
     */
    public function getNameProduct()
    {
        return $this->nameProduct;
    }

    /**
     * Set descriptionProduct
     *
     * @param string $descriptionProduct
     * @return Product
     */
    public function setDescriptionProduct($descriptionProduct)
    {
        $this->descriptionProduct = $descriptionProduct;

        return $this;
    }

    /**
     * Get descriptionProduct
     *
     * @return string 
     */
    public function getDescriptionProduct()
    {
        return $this->descriptionProduct;
    }

    /**
     * Set priceProduct
     *
     * @param integer $priceProduct
     * @return Product
     */
    public function setPriceProduct($priceProduct)
    {
        $this->priceProduct = $priceProduct;

        return $this;
    }

    /**
     * Get priceProduct
     *
     * @return integer 
     */
    public function getPriceProduct()
    {
        return $this->priceProduct;
    }

    /**
     * Set imageProduct
     *
     * @param string $imageProduct
     * @return Product
     */
    public function setImageProduct($imageProduct)
    {
        $this->imageProduct = $imageProduct;

        return $this;
    }

    /**
     * Get imageProduct
     *
     * @return string 
     */
    public function getImageProduct()
    {
        return $this->imageProduct;
    }

    /**
     * Set videoProduct
     *
     * @param string $videoProduct
     * @return Product
     */
    public function setVideoProduct($videoProduct)
    {
        $this->videoProduct = $videoProduct;

        return $this;
    }

    /**
     * Get videoProduct
     *
     * @return string 
     */
    public function getVideoProduct()
    {
        return $this->videoProduct;
    }

    /**
     * Set amountViewsProduct
     *
     * @param integer $amountViewsProduct
     * @return Product
     */
    public function setAmountViewsProduct($amountViewsProduct)
    {
        $this->amountViewsProduct = $amountViewsProduct;

        return $this;
    }

    /**
     * Get amountViewsProduct
     *
     * @return integer 
     */
    public function getAmountViewsProduct()
    {
        return $this->amountViewsProduct;
    }

    /**
     * Set likesAmountProduct
     *
     * @param integer $likesAmountProduct
     * @return Product
     */
    public function setLikesAmountProduct($likesAmountProduct)
    {
        $this->likesAmountProduct = $likesAmountProduct;

        return $this;
    }

    /**
     * Get likesAmountProduct
     *
     * @return integer 
     */
    public function getLikesAmountProduct()
    {
        return $this->likesAmountProduct;
    }

    /**
     * Set dislikesAmountProduct
     *
     * @param integer $dislikesAmountProduct
     * @return Product
     */
    public function setDislikesAmountProduct($dislikesAmountProduct)
    {
        $this->dislikesAmountProduct = $dislikesAmountProduct;

        return $this;
    }

    /**
     * Get dislikesAmountProduct
     *
     * @return integer 
     */
    public function getDislikesAmountProduct()
    {
        return $this->dislikesAmountProduct;
    }

    /**
     * Set idUser
     *
     * @param \BeitechBundle\Entity\User $idUser
     * @return Product
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
