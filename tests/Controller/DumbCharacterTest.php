<?php

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DumbCharacterController extends WebTestCase
{

    /*public function setUp()
    {
        parent::setup();
        $fixtures = [
            'App\DataFixtures\AppFixtures'
        ];

        $this->loadFixtures($fixtures);
    }*/

    public function testShowCharacter()
    {
        $client = static::createClient();

        $client->request('GET', '/api/characters/{id}');

        // test returned status code
        $this->assertEquals(200, $client->getResponse()->getStatusCode());

        // verifying the headers
        $this->assertTrue($client->getResponse()->headers
            ->contains(
                "Content-Type",
                'application/json'
            ),
            "The content type is not matching ?"
        );
    }

    /**
     * test for the list method
     */
    public function testShowCharacters()
    {
        $client = static::createClient();
        $client->request('GET', '/api/characters');
        $response = $client->getResponse();

        // test returned status code
        $this->assertEquals(200, $response->getStatusCode());


        // verifying the headers
        $this->assertTrue($client->getResponse()->headers
            ->contains(
                "Content-Type",
                'application/json'
            ),
            "The content type is not matching ?"
        );
    }

    /**
     * POST method test
     */
    public function testCreateCharacter()
    {
        $client = static::createClient();

        $client->request(
            'POST',
            '/api/characters',
            array(),
            array(),
            array('CONTENT_TYPE' => 'application/json'),
            '{"name" : "Summer Smith", "best_quote" : "Okaaay, but not because you told me to."}'
        );
        $response = $client->getResponse();

        $this->assertEquals(201, $response->getStatusCode());

    }
}