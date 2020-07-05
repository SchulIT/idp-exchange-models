<?php

namespace SchulIT\IdpExchange\Response;

use JMS\Serializer\Annotation as Serializer;

class UpdatedUsersResponse {
    /**
     * @Serializer\Type("array<SchulIT\IdpExchange\Response\UserUpdateInformation>")
     */
    public $users = [ ];
}