<?php

namespace SchulIT\IdpExchange\Request\Builder;

use SchulIT\IdpExchange\Request\UserRequest;

class UserRequestBuilder {
    /**
     * @var string
     */
    private $username;

    /**
     * @param string $username
     * @return UserRequestBuilder
     */
    public function setUsername(string $username): UserRequestBuilder {
        $this->username = $username;
        return $this;
    }

    /**
     * @return UserRequest
     */
    public function build(): UserRequest {
        $request = new UserRequest();
        $request->username = $this->username;
        return $request;
    }
}