<?php

namespace SchulIT\IdpExchange\Tests\Request\Builder;

use PHPUnit\Framework\TestCase;
use SchulIT\IdpExchange\Request\Builder\UserRequestBuilder;

class UserRequestBuilderTest extends TestCase {
    public function testAddUser() {
        $request = (new UserRequestBuilder())
            ->setUsername('username')
            ->build();

        $this->assertEquals('username', $request->username);
    }
}