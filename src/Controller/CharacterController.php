<?php

namespace App\Controller;

use App\Entity\Character;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class CharacterController extends AbstractController
{
    /**
     * @Route("/api/characters/{id}", methods="GET")
     */
    public function showCharacter($id)
    {

    }

    /**
     * @Route("/api/characters", methods="GET", name="get_characters")
     */
    public function showCharacters()
    {

    }

    /**
     * @Route("/api/characters", methods="POST", name="post_characters")
     */
    public function createCharacter(Request $request)
    {
        //$data = $request->getContent();
        return new Response("This is workiiiiing :D");
    }
}