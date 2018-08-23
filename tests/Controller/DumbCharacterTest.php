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

        // test with hardcoded id, not sure about the way to go about it
        $client->request(
            'GET',
            '/api/characters',
            [ 'id' => 10 ],
            array(),
            array(
                'CONTENT_TYPE' => 'application/json'
            )
        );

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

        $this->assertEquals(201, $client->getResponse()->getStatusCode());

    }
}