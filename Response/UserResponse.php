<?php

namespace SchulIT\IdpExchange\Response;

use JMS\Serializer\Annotation as Serializer;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Represents a serialized version of a user with a username and a list of attributes (which were delivered using SAML in
 * the first place).
 */
class UserResponse {
    /**
     * @Serializer\Type("string")
     * @Assert\NotBlank()
     */
    public $username;

    /**
     * @Serializer\Type("array<SchulIT\IdpExchange\Response\AbstractAttribute>")
     */
    public $attributes = [ ];
}