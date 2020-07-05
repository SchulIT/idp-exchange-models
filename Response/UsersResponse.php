<?php

namespace SchulIT\IdpExchange\Response;

use JMS\Serializer\Annotation as Serializer;

/**
 * Represents a response of a UsersRequest
 */
class UsersResponse {
    /**
     * @Serializer\Type("array<SchulIT\IdpExchange\Response\UserResponse>")
     */
    public $users = [ ];
}