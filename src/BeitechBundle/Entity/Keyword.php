<?php

namespace BeitechBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Keyword
 *
 * @ORM\Table(name="keyword")
 * @ORM\Entity
 */
class Keyword
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_keyword", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idKeyword;

    /**
     * @var string
     *
     * @ORM\Column(name="name_keyword", type="string", length=50, nullable=false)
     */
    private $nameKeyword;



    /**
     * Get idKeyword
     *
     * @return integer 
     */
    public function getIdKeyword()
    {
        return $this->idKeyword;
    }

    /**
     * Set nameKeyword
     *
     * @param string $nameKeyword
     * @return Keyword
     */
    public function setNameKeyword($nameKeyword)
    {
        $this->nameKeyword = $nameKeyword;

        return $this;
    }

    /**
     * Get nameKeyword
     *
     * @return string 
     */
    public function getNameKeyword()
    {
        return $this->nameKeyword;
    }
}
