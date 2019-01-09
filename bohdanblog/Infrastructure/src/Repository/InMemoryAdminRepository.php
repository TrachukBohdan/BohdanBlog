<?php

namespace Infrastructure\Repository;

use Domain\Admin\Admin;
use Domain\Admin\AdminCollectionInterface;
use Domain\Admin\AdminEmail;

class InMemoryAdminRepository implements AdminCollectionInterface
{
    private $adminCollection = [];

    /**
     * @param Admin $admin
     * @return mixed
     */
    public function add(Admin $admin)
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
    public function findAdminByEmail(AdminEmail $adminEmail): ?Admin
    {
        foreach ($this->adminCollection as $admin) {
            if ($adminEmail->sameValueAs($admin->email())) {
                return $admin;
            }
        }

        return null;
    }
}