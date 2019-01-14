<?php

namespace Domain\User\User;

interface UserCollectionInterface
{
    /**
     * @param User $User
     */
    public function add(User $User);

    /**
     * @return array
     */
    public function all(): array;

    /**
     * @param UserEmail $UserEmail
     * @return mixed
     */
    public function findUserByEmail(UserEmail $UserEmail): ?User;
}