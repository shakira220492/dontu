<?php

namespace BeitechBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NewsKeyword
 *
 * @ORM\Table(name="news_keyword", indexes={@ORM\Index(name="id_news", columns={"id_news"}), @ORM\Index(name="id_news_2", columns={"id_news"}), @ORM\Index(name="id_keyword", columns={"id_keyword"})})
 * @ORM\Entity
 */
class NewsKeyword
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_news_keyword", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idNewsKeyword;

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
     * @var \News
     *
     * @ORM\ManyToOne(targetEntity="News")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_news", referencedColumnName="id_news")
     * })
     */
    private $idNews;



    /**
     * Get idNewsKeyword
     *
     * @return integer 
     */
    public function getIdNewsKeyword()
    {
        return $this->idNewsKeyword;
    }

    /**
     * Set idKeyword
     *
     * @param \BeitechBundle\Entity\Keyword $idKeyword
     * @return NewsKeyword
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
     * Set idNews
     *
     * @param \BeitechBundle\Entity\News $idNews
     * @return NewsKeyword
     */
    public function setIdNews(\BeitechBundle\Entity\News $idNews = null)
    {
        $this->idNews = $idNews;

        return $this;
    }

    /**
     * Get idNews
     *
     * @return \BeitechBundle\Entity\News 
     */
    public function getIdNews()
    {
        return $this->idNews;
    }
}
