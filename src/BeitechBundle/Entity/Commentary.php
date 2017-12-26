<?php

namespace BeitechBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commentary
 *
 * @ORM\Table(name="commentary", indexes={@ORM\Index(name="id_product", columns={"id_product"}), @ORM\Index(name="id_user", columns={"id_user"})})
 * @ORM\Entity
 */
class Commentary
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_commentary", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCommentary;

    /**
     * @var string
     *
     * @ORM\Column(name="description_commentary", type="text", length=65535, nullable=false)
     */
    private $descriptionCommentary;

    /**
     * @var integer
     *
     * @ORM\Column(name="amount_likes_commentary", type="integer", nullable=false)
     */
    private $amountLikesCommentary;

    /**
     * @var integer
     *
     * @ORM\Column(name="amount_dislikes_commentary", type="integer", nullable=false)
     */
    private $amountDislikesCommentary;

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
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_user", referencedColumnName="id_user")
     * })
     */
    private $idUser;



    /**
     * Get idCommentary
     *
     * @return integer 
     */
    public function getIdCommentary()
    {
        return $this->idCommentary;
    }

    /**
     * Set descriptionCommentary
     *
     * @param string $descriptionCommentary
     * @return Commentary
     */
    public function setDescriptionCommentary($descriptionCommentary)
    {
        $this->descriptionCommentary = $descriptionCommentary;

        return $this;
    }

    /**
     * Get descriptionCommentary
     *
     * @return string 
     */
    public function getDescriptionCommentary()
    {
        return $this->descriptionCommentary;
    }

    /**
     * Set amountLikesCommentary
     *
     * @param integer $amountLikesCommentary
     * @return Commentary
     */
    public function setAmountLikesCommentary($amountLikesCommentary)
    {
        $this->amountLikesCommentary = $amountLikesCommentary;

        return $this;
    }

    /**
     * Get amountLikesCommentary
     *
     * @return integer 
     */
    public function getAmountLikesCommentary()
    {
        return $this->amountLikesCommentary;
    }

    /**
     * Set amountDislikesCommentary
     *
     * @param integer $amountDislikesCommentary
     * @return Commentary
     */
    public function setAmountDislikesCommentary($amountDislikesCommentary)
    {
        $this->amountDislikesCommentary = $amountDislikesCommentary;

        return $this;
    }

    /**
     * Get amountDislikesCommentary
     *
     * @return integer 
     */
    public function getAmountDislikesCommentary()
    {
        return $this->amountDislikesCommentary;
    }

    /**
     * Set idProduct
     *
     * @param \BeitechBundle\Entity\Product $idProduct
     * @return Commentary
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
     * Set idUser
     *
     * @param \BeitechBundle\Entity\User $idUser
     * @return Commentary
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
