<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class CharacterController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function showCharacters()
    {
        return new Response("finally working ?");
    }
}