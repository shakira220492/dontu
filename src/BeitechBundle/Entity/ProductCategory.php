<?php

namespace BeitechBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProductCategory
 *
 * @ORM\Table(name="product_category", indexes={@ORM\Index(name="id_product", columns={"id_product"}), @ORM\Index(name="id_category", columns={"id_category"})})
 * @ORM\Entity
 */
class ProductCategory
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_product", type="integer", nullable=false)
     */
    private $idProduct;

    /**
     * @var \Category
     *
     * @ORM\ManyToOne(targetEntity="Category")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_category", referencedColumnName="id_category")
     * })
     */
    private $idCategory;

    /**
     * @var \Product
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Product")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_product_category", referencedColumnName="id_product")
     * })
     */
    private $idProductCategory;



    /**
     * Set idProduct
     *
     * @param integer $idProduct
     * @return ProductCategory
     */
    public function setIdProduct($idProduct)
    {
        $this->idProduct = $idProduct;

        return $this;
    }

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
     * Set idCategory
     *
     * @param \BeitechBundle\Entity\Category $idCategory
     * @return ProductCategory
     */
    public function setIdCategory(\BeitechBundle\Entity\Category $idCategory = null)
    {
        $this->idCategory = $idCategory;

        return $this;
    }

    /**
     * Get idCategory
     *
     * @return \BeitechBundle\Entity\Category 
     */
    public function getIdCategory()
    {
        return $this->idCategory;
    }

    /**
     * Set idProductCategory
     *
     * @param \BeitechBundle\Entity\Product $idProductCategory
     * @return ProductCategory
     */
    public function setIdProductCategory(\BeitechBundle\Entity\Product $idProductCategory)
    {
        $this->idProductCategory = $idProductCategory;

        return $this;
    }

    /**
     * Get idProductCategory
     *
     * @return \BeitechBundle\Entity\Product 
     */
    public function getIdProductCategory()
    {
        return $this->idProductCategory;
    }
}
