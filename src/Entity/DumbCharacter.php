<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation as Serializer;

/**
 * @ORM\Entity(repositoryClass="App\Repository\DumbCharacterRepository")
 *
 */
class DumbCharacter
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     *
     * @Serializer\Groups({"list"})
     *
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     *
     * @Serializer\Groups({"detail", "list"})
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     *
     * @Serializer\Groups({"detail", "list"})
     */
    private $bestQuote;

    /**
     * @ORM\Column(type="string", length=255)
     *
     * @Serializer\Groups({"detail", "list"})
     */
    private $imageUrl;

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    public function getBestQuote()
    {
        return $this->bestQuote;
    }

    public function setBestQuote($bestQuote)
    {
        $this->bestQuote = $bestQuote;

        return $this;
    }

    public function getImageUrl() {
        return $this->imageUrl;
    }

    public function setImageUrl($imageUrl) {
        $this->imageUrl = $imageUrl;

        return $this;
    }
}
