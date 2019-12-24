<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity;

class SysUser extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $user = new Entity\SysUser();
        $user->setEmail('admin@demo.com');
        $user->setPassword('@@admin@@');
        $manager->persist($user);
        $manager->flush();
    }
}
