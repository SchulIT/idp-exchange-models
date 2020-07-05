<?php

namespace SchulIT\IdpExchange\Response\Builder;

use SchulIT\IdpExchange\Response\UserResponse;
use SchulIT\IdpExchange\Response\UsersResponse;

class UsersResponseBuilder {

    /**
     * @var UserResponse[]
     */
    private $users = [ ];

    /**
     * @param UserResponse $userResponse
     * @return UsersResponseBuilder
     */
    public function addUser(UserResponse $userResponse): UsersResponseBuilder {
        $this->users[] = $userResponse;
        return $this;
    }

    /**
     * @return UsersResponse
     */
    public function build(): UsersResponse {
        $response = new UsersResponse();

        foreach($this->users as $userResponse) {
            $response->users[] = clone $userResponse;
        }

        return $response;
    }
}