<?php

namespace Domain\Admin;

interface AdminCollectionInterface
{
    /**
     * @param Admin $admin
     */
    public function add(Admin $admin);

    /**
     * @return array
     */
    public function all(): array;

    /**
     * @param AdminEmail $adminEmail
     * @return mixed
     */
    public function findAdminByEmail(AdminEmail $adminEmail): ?Admin;
}