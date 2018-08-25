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
        $rick->setImageUrl("http://upload.wikimedia.org/wikipedia/en/thumb/e/e9/Rick_and_Morty_characters_-_Rick_Sanchez.jpg/220px-Rick_and_Morty_characters_-_Rick_Sanchez.jpg");

        $pickleRick = new DumbCharacter();
        $pickleRick->setName("Pickle Rick");
        $pickleRick->setBestQuote("I'M PICKLE RIIIIIIICK !");
        $pickleRick->setImageUrl("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQf89bSwCrwRx7KKMYdZgU5BL8MkXph4259Le16KHj9BTE4aOpX");
        $manager->persist($pickleRick);

        $morty = new DumbCharacter();
        $morty->setName("Morty Smith");
        $morty->setBestQuote("Nobody exist on purpose, nobody belongs anywhere, everybody gonna die. Come watch TV.. ?");
        $morty->setImageUrl("http://40.media.tumblr.com/022bbb45b3257c3c494a1de93179bd8a/tumblr_n45cr8dmj61ty0km0o7_1280.png");
        $manager->persist($morty);

        $mrMeeseeks = new DumbCharacter();
        $mrMeeseeks->setName("Mr Meeseeks");
        $mrMeeseeks->setBestQuote("Im Mister Meeseeeks loook at meeee");
        $mrMeeseeks->setImageUrl("https://i.pinimg.com/originals/cb/58/fb/cb58fb82a6b07f4bb323e9f483c3a421.jpg");
        $manager->persist($mrMeeseeks);

        $jerry = new DumbCharacter();
        $jerry->setName("Jerry Smith");
        $jerry->setBestQuote("Pluto is a planet.");
        $jerry->setImageUrl("https://verbstomp.com/wp-content/uploads/2015/11/jerry_post.jpg");

        $manager->persist($jerry);

        $beth = new DumbCharacter();
        $beth->setName("Beth Smith");
        $beth->setBestQuote("Jerry, get a job.");
        $beth->setImageUrl("https://verbstomp.com/wp-content/uploads/2015/11/beth_post.jpg");
        $manager->persist($beth);

        $manager->flush();

    }
}