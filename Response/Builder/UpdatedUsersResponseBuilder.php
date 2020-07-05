<?php

namespace SchulIT\IdpExchange\Response\Builder;

use SchulIT\IdpExchange\Response\UserUpdateInformation;
use SchulIT\IdpExchange\Response\UpdatedUsersResponse;

class UpdatedUsersResponseBuilder {

    /**
     * @var UserUpdateInformation[]
     */
    private $users = [ ];

    /**
     * @param string $username
     * @param \DateTime $updated
     * @return UpdatedUsersResponseBuilder
     */
    public function addUser(string $username, \DateTime $updated): UpdatedUsersResponseBuilder {
        $user = new UserUpdateInformation();
        $user->username = $username;
        $user->updated = $updated;

        $this->users[] = $user;
        return $this;
    }

    /**
     * @return UpdatedUsersResponse
     */
    public function build(): UpdatedUsersResponse {
        $response = new UpdatedUsersResponse();
        $response->users = $this->users;

        return $response;
    }
}