<?php

namespace Infrastructure\Repository;

use Domain\Admin\Admin;
use Domain\Admin\AdminCollectionInterface;

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
}