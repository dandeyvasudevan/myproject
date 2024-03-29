<?php
namespace Acme\Bundle\TestBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Acme\UserBundle\Entity\User;

class LoadUserData extends AbstractFixture implements OrderedFixtureInterface    
{
    public function load(ObjectManager $manager) {
        $user   =   new User();
        $user->setUsername("admin");
        $user->setEmail("dandeyvasudevan@gmail.com");
        $user->setPlainPassword("adm1n");
        $user->setEnabled(true);
        $user->setRoles(array('ROLE_ADMIN'));
        
        $manager->persist($user);
        $manager->flush();
    }
    
    public function getOrder() {
        return 3;
    }
}
