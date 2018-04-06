<?php

namespace App\DataFixtures;

use App\Entity\Foo;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

/**
 * Class FooFixtures.
 */
class FooFixtures extends Fixture
{
    /**
     * {@inheritdoc}
     */
    public function load(ObjectManager $manager)
    {
        for ($i = 0; $i < 20; ++$i) {
            $foo = (new Foo())
                ->setBar('bar '.$i);
            $manager->persist($foo);
        }

        $manager->flush();
    }
}
