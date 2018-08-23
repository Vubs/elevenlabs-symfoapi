<?php

namespace App\Controller;

use App\Entity\DumbCharacter;
use JMS\Serializer\SerializationContext;
use JMS\Serializer\SerializerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;use Symfony\Component\Routing\Annotation\Route;

class DumbCharacterController extends AbstractController
{
    /**
     * @Route("/hello-world")
     */
    public function helloWorld()
    {
        return new Response("Hello world");
    }

    /**
     * @Route("/api/characters/{id}", methods="GET", name="get_character")
     */
    public function showCharacter(DumbCharacter $character, SerializerInterface $serializer)
    {
        $data = $serializer->serialize($character, 'json',
            SerializationContext::create()->setGroups(['detail']));

        $response = new Response($data, Response::HTTP_OK);
        $response->headers->set('Content-Type', 'application/json');

        return $response;
    }

    /**
     * @Route("/api/characters", methods="GET", name="get_characters")
     */
    public function showCharacters(SerializerInterface $serializer)
    {
        $characters = $this->getDoctrine()->getRepository(DumbCharacter::class)->findAll();
        $data = $serializer->serialize($characters, 'json',
            SerializationContext::create()->setGroups(['list']));

        $response = new Response($data, Response::HTTP_OK);
        $response->headers->set('Content-Type', 'application/json');

        return $response;

    }

    /**
     * @Route("/api/characters", methods="POST", name="post_characters")
     */
    public function createCharacter(Request $request, SerializerInterface $serializer)
    {
        // getting the POST request data
        $data = $request->getContent();

        // Haven't found documentation on how to implement my jms serializer in symfony 4
        // But I think this is the way to go (?), this way I'm guaaranteed to have either the serialize and deserialize method
        $character = $serializer->deserialize($data, 'App\Entity\DumbCharacter', 'json');
        //dump($character); die;
        // trying to persist the character in the database

        $em = $this->getDoctrine()->getManager();
        $em->persist($character);
        $em->flush();

        // this will result in code 201, which is the one for resource creation.
        return new Response("", Response::HTTP_CREATED);
    }
}