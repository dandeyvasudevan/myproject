<?php

namespace Acme\Bundle\TestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Category
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Acme\Bundle\TestBundle\Entity\CategoryRepository")
 */
class Category
{
    
    protected $products;
    
    /**
     * @ORM\OneToMany(targetEntity="Products", mappedBy="category")
     */
    public function __construct() {
        $this->products =   new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="ctg_name", type="string", length=255)
     */
    private $ctgName;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set ctgName
     *
     * @param string $ctgName
     * @return Category
     */
    public function setCtgName($ctgName)
    {
        $this->ctgName = $ctgName;

        return $this;
    }

    /**
     * Get ctgName
     *
     * @return string 
     */
    public function getCtgName()
    {
        return $this->ctgName;
    }
    
    public function getProducts(){
        return $this->products;
    }
    
    public function __toString() {
        return $this->ctgName;
    }
}
