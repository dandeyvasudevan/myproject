<?php

namespace Acme\DemoBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class PostControllerTest extends WebTestCase
{
    public function testGetlist()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '_list-posts');
    }

}
