<?php

namespace Acme\Bundle\TestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Symptom
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Acme\Bundle\TestBundle\Entity\SymptomRepository")
 */
class Symptom
{
    
    /**
     * @var \Doctrine\Common\Collections\ArrayCollection $conditions;
     * @ORM\ManyToMany(targetEntity="Cond", mappedBy="symptoms")
     */
    protected $conditions;
    
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
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;


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
     * Set name
     *
     * @param string $name
     * @return Symptom
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->conditions = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add conditions
     *
     * @param \Acme\Bundle\TestBundle\Entity\Cond $conditions
     * @return Symptom
     */
    public function addCondition(\Acme\Bundle\TestBundle\Entity\Cond $conditions)
    {
        $this->conditions[] = $conditions;

        return $this;
    }

    /**
     * Remove conditions
     *
     * @param \Acme\Bundle\TestBundle\Entity\Cond $conditions
     */
    public function removeCondition(\Acme\Bundle\TestBundle\Entity\Cond $conditions)
    {
        $this->conditions->removeElement($conditions);
    }

    /**
     * Get conditions
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getConditions()
    {
        return $this->conditions;
    }
    
    public function __toString() {
        return $this->getName();
    }
}
