<?php

namespace Acme\Bundle\TestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cond
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Acme\Bundle\TestBundle\Entity\CondRepository")
 */
class Cond
{
    
    
    /**
     * @var \Doctrine\Common\Collections\ArrayCollection $symptoms;
     * @ORM\ManyToMany(targetEntity="Symptom", inversedBy="conditions")
     * @ORM\JoinTable(name="condition_symptoms",
     *      joinColumns={@ORM\JoinColumn(name="cond_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="symptom_id", referencedColumnName="id")}
     *      )
     */
    protected $symptoms;
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
     * @return Cond
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
        $this->symptoms = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add symptoms
     *
     * @param \Acme\Bundle\TestBundle\Entity\Symptom $symptoms
     * @return Cond
     */
    public function addSymptom(\Acme\Bundle\TestBundle\Entity\Symptom $symptoms)
    {
        $this->symptoms[] = $symptoms;

        return $this;
    }

    /**
     * Remove symptoms
     *
     * @param \Acme\Bundle\TestBundle\Entity\Symptom $symptoms
     */
    public function removeSymptom(\Acme\Bundle\TestBundle\Entity\Symptom $symptoms)
    {
        $this->symptoms->removeElement($symptoms);
    }

    /**
     * Get symptoms
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSymptoms()
    {
        return $this->symptoms;
    }
    
    public function __toString() {
        return $this->getName();
    }
}
