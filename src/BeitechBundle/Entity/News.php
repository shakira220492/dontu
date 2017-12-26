<?php

namespace BeitechBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * News
 *
 * @ORM\Table(name="news", indexes={@ORM\Index(name="id_user", columns={"id_user"})})
 * @ORM\Entity
 */
class News
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_news", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idNews;

    /**
     * @var string
     *
     * @ORM\Column(name="title_news", type="string", length=100, nullable=false)
     */
    private $titleNews;

    /**
     * @var string
     *
     * @ORM\Column(name="image_news", type="string", length=300, nullable=false)
     */
    private $imageNews;

    /**
     * @var string
     *
     * @ORM\Column(name="link_news", type="text", length=65535, nullable=false)
     */
    private $linkNews;

    /**
     * @var string
     *
     * @ORM\Column(name="description_news", type="text", length=65535, nullable=false)
     */
    private $descriptionNews;

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
     * Get idNews
     *
     * @return integer 
     */
    public function getIdNews()
    {
        return $this->idNews;
    }

    /**
     * Set titleNews
     *
     * @param string $titleNews
     * @return News
     */
    public function setTitleNews($titleNews)
    {
        $this->titleNews = $titleNews;

        return $this;
    }

    /**
     * Get titleNews
     *
     * @return string 
     */
    public function getTitleNews()
    {
        return $this->titleNews;
    }

    /**
     * Set imageNews
     *
     * @param string $imageNews
     * @return News
     */
    public function setImageNews($imageNews)
    {
        $this->imageNews = $imageNews;

        return $this;
    }

    /**
     * Get imageNews
     *
     * @return string 
     */
    public function getImageNews()
    {
        return $this->imageNews;
    }

    /**
     * Set linkNews
     *
     * @param string $linkNews
     * @return News
     */
    public function setLinkNews($linkNews)
    {
        $this->linkNews = $linkNews;

        return $this;
    }

    /**
     * Get linkNews
     *
     * @return string 
     */
    public function getLinkNews()
    {
        return $this->linkNews;
    }

    /**
     * Set descriptionNews
     *
     * @param string $descriptionNews
     * @return News
     */
    public function setDescriptionNews($descriptionNews)
    {
        $this->descriptionNews = $descriptionNews;

        return $this;
    }

    /**
     * Get descriptionNews
     *
     * @return string 
     */
    public function getDescriptionNews()
    {
        return $this->descriptionNews;
    }

    /**
     * Set idUser
     *
     * @param \BeitechBundle\Entity\User $idUser
     * @return News
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
