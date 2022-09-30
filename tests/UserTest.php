<?php

namespace App\Tests;

use ApiPlatform\Symfony\Bundle\Test\ApiTestCase;

class UserTest extends ApiTestCase
{
    public function test_create_user(): void
    {
        $response = static::createClient()->request('POST', '/api/users', ['json' =>[
            'id' => '1',
            'firstname' => 'Alex',
            'lastname' => 'RIERA',
            'password' => 'doby',
            'email' => 'doby@doby.fr'
        ]]);

        // $this->assertResponseStatusCodeSame(201);
        $this->assertJsonContains([
            'id' => '1',
            'firstname' => 'Alex',
            'lastname' => 'RIERA',
            'password' => 'doby',
            'email' => 'doby@doby.fr'
        ]);
    }
}
