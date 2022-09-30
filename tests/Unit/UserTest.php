<?php

namespace App\Tests\Unit;

use App\Entity\User;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    private User $user;

    protected function setUp() :void
    {
        parent::setUp();

        $this->user = new User;
    }
    
    public function testGetFirstname(): void
    {
        $value = "Alex";

        $response = $this->user->setFirstname($value);

        self::assertInstanceOf(User::class, $response);
        self::assertEquals($value, $this->user->getFirstname());
    }

    public function testGetLastname(): void
    {
        $value = "DUPONT";

        $response = $this->user->setLastname($value);

        self::assertInstanceOf(User::class, $response);
        self::assertEquals($value, $this->user->getLastname());
    }

    public function testGetPassword(): void
    {
        $value = "AlexDUPEmail";

        $response = $this->user->setPassword($value);

        self::assertInstanceOf(User::class, $response);
        self::assertEquals($value, $this->user->getPassword());
    }

    public function testGetEmail(): void
    {
        $value = "alex@dupont.fr";

        $response = $this->user->setEmail($value);

        self::assertInstanceOf(User::class, $response);
        self::assertEquals($value, $this->user->getEmail());
    }
}
