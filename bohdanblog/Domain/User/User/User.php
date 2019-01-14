<?php

namespace Domain\User\User;

class User
{
    private $id;

    private $email;

    private $password;

    /**
     * Admin constructor.
     * @param UserId $id
     * @param UserEmail $email
     * @param UserPassword $password
     */
    private function __construct(
        UserId $id,
        UserEmail $email,
        UserPassword $password
    ) {
        $this->id = $id;
        $this->email = $email;
        $this->password = $password;
    }

    /**
     * @param UserId $id
     * @param UserEmail $email
     * @param UserPassword $password
     * @return User
     */
    public static function createUserWithData(
        UserId $id,
        UserEmail $email,
        UserPassword $password
    ): User {
        return new User($id, $email, $password);
    }

    public function id(): UserId
    {
        return $this->id;
    }

    public function email(): UserEmail
    {
        return $this->email;
    }

    public function password(): UserPassword
    {
        return $this->password;
    }
}