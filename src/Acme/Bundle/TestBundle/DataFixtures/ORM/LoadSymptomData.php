<?php

namespace Acme\Bundle\TestBundle\DataFixtures\ORM;

//use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Acme\Bundle\TestBundle\Entity\Symptom;

//implements FixtureInterface

class LoadSymptomData extends AbstractFixture implements OrderedFixtureInterface    
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $symptom1    =   new Symptom();
        $symptom1->setName("coughing");
        $manager->persist($symptom1);
        $this->setReference("asthma_symptom1", $symptom1);
        
        $symptom2   =   new Symptom();
        $symptom2->setName("shortness of breath");
        $manager->persist($symptom2);
        $this->setReference("asthma_symptom2", $symptom2);
        
        $symptom3    =   new Symptom();
        $symptom3->setName("tiredness");
        $manager->persist($symptom3);
        $this->setReference("diabetes_symptom1", $symptom3);
        
        $symptom4   =   new Symptom();
        $symptom4->setName("weight loss");
        $manager->persist($symptom4);
        $this->setReference("diabetes_symptom2", $symptom4);
        $manager->flush();
    }
    
    public function getOrder() {
        return 1;
    }
}

