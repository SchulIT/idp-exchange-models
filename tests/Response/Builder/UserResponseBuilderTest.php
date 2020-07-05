<?php

namespace SchulIT\IdpExchange\Tests\Response\Builder;

use PHPUnit\Framework\TestCase;
use SchulIT\IdpExchange\Response\Builder\UserResponseBuilder;
use SchulIT\IdpExchange\Response\ValueAttribute;
use SchulIT\IdpExchange\Response\ValuesAttribute;

class UserResponseBuilderTest extends TestCase {
    public function testSetUsername() {
        $response = (new UserResponseBuilder())
            ->setUsername('username')
            ->build();

        $this->assertEquals('username', $response->username);
        $this->assertEmpty($response->attributes);
    }

    public function testAddAttributeValue() {
        $response = (new UserResponseBuilder())
            ->addValueAttribute('name', 'value')
            ->build();

        $this->assertEquals(1, count($response->attributes));
        $this->assertInstanceOf(ValueAttribute::class, $response->attributes[0]);
        $this->assertEquals('name', $response->attributes[0]->name);
        $this->assertEquals('value', $response->attributes[0]->value);
    }

    public function testAddNullAttributeValue() {
        $response = (new UserResponseBuilder())
            ->addValueAttribute('name', null)
            ->build();

        $this->assertEquals(1, count($response->attributes));
        $this->assertEquals('name', $response->attributes[0]->name);
        $this->assertNull($response->attributes[0]->value);
    }

    public function testAddAttributeValues() {
        $response = (new UserResponseBuilder())
            ->addValuesAttribute('name', ['valueOne', 'valueTwo'])
            ->build();

        $this->assertEquals(1, count($response->attributes));
        $this->assertInstanceOf(ValuesAttribute::class, $response->attributes[0]);
        $this->assertEquals('name', $response->attributes[0]->name);
        $this->assertEquals(['valueOne', 'valueTwo'], $response->attributes[0]->values);
    }
}