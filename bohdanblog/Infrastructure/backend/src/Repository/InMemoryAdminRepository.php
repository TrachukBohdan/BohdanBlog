<?php

namespace Infrastructure\Repository;

use Domain\Admin\User;
use Domain\Admin\AdminCollectionInterface;
use Domain\Admin\AdminEmail;

class InMemoryAdminRepository implements AdminCollectionInterface
{
    private $adminCollection = [];

    /**
     * @param User $admin
     * @return mixed
     */
    public function add(User $admin)
    {
        $this->adminCollection[] = $admin;
    }

    /**
     * @return array
     */
    public function all(): array
    {
        return $this->adminCollection;
    }

    /**
     * @param AdminEmail $adminEmail
     * @return mixed
     */
    public function findAdminByEmail(AdminEmail $adminEmail): ?User
    {
        foreach ($this->adminCollection as $admin) {
            if ($adminEmail->sameValueAs($admin->email())) {
                return $admin;
            }
        }

        return null;
    }
}