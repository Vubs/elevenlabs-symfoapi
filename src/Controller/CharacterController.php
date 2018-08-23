<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class CharacterController
{
    /**
     * @Route("/")
     */
    public function showCharacters()
    {
        return new Response("finally working ?");
    }
}