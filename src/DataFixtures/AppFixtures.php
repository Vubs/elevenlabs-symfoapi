<?php

namespace App\DataFixtures;

use App\Entity\DumbCharacter;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $rick = new DumbCharacter();
        $rick->setName("Rick Sanchez");
        $rick->setBestQuote("Wuba luba dub duuub!");
        $manager->persist($rick);

        $pickleRick = new DumbCharacter();
        $pickleRick->setName("Pickle Rick");
        $pickleRick->setBestQuote("I'M PICKLE RIIIIIIICK !");
        $manager->persist($pickleRick);

        $morty = new DumbCharacter();
        $morty->setName("Morty Smith");
        $morty->setBestQuote("Nobody exist on purpose, nobody belongs anywhere, everybody gonna die. Come watch TV.. ?");
        $manager->persist($morty);

        $mrMeeseeks = new DumbCharacter();
        $mrMeeseeks->setName("Mr Meeseeks");
        $mrMeeseeks->setBestQuote("Im Mister Meeseeeks loook at meeee");
        $manager->persist($mrMeeseeks);

        $jerry = new DumbCharacter();
        $jerry->setName("Jerry Smith");
        $jerry->setBestQuote("Pluto is a planet.");
        $manager->persist($jerry);

        $beth = new DumbCharacter();
        $beth->setName("Beth Smith");
        $beth->setBestQuote("Jerry, get a job.");
        $manager->persist($beth);

        $manager->flush();

    }
}