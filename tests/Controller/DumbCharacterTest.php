<?php

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DumbCharacterController extends WebTestCase
{

    public function setUp()
    {
        parent::setup();
        $fixtures = [
          'App\DataFixtures\ORM\LoadUserData',
        ];
    }


    public function testShowCharacter()
    {
        $client = static::createClient();

        $client->request('GET', '/api/characters/{id}');

        // test returned status code
        $this->assertEquals(200, $client->getResponse()->getStatusCode());

        // test that the response is JSON
        $crawler = $client->getResponse()->getContent();


    }
}