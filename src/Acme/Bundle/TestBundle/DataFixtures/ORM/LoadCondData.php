<?php

namespace Acme\Bundle\TestBundle\DataFixtures\ORM;

//use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Acme\Bundle\TestBundle\Entity\Cond;

//implements FixtureInterface

class LoadCondData extends AbstractFixture implements OrderedFixtureInterface    
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $cond1  =   new Cond();
        $cond1->setName("Asthma");
        $cond1->addSymptom($this->getReference("asthma_symptom1"));
        $cond1->addSymptom($this->getReference("asthma_symptom2"));
        $manager->persist($cond1);
                
        $cond2  =   new Cond();
        $cond2->setName("Diabetes");
        $cond2->addSymptom($this->getReference("diabetes_symptom1"));
        $cond2->addSymptom($this->getReference("diabetes_symptom2"));
        $manager->persist($cond2);
        $this->setReference("diabetes_cond", $cond2);
        
        $manager->flush();
    }
    
    public function getOrder() {
        return 2;
    }
}

