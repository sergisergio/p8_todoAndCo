<?php

namespace App\Tests\Controller;


use PHPUnit\Framework\TestCase;

class DefaultControllerTest extends TestCase
{
    private $client = null;

    public function setUp():void
    {
        $this->client = static::createClient([], [
            'PHP_AUTH_USER' => 'alaina04',
            'PHP_AUTH_PW'   => 'pass',
        ]);
    }

    public function testIndex()
    {

        $this->client ->request('GET', '/');

        static::assertEquals(200, $this->client ->getResponse()->getStatusCode());

    }
}
