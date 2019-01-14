<?php

namespace Domain\User\Admin;

use Domain\Admin\Admin;

interface AdminCollectionInterface
{
    public function add(Admin $admin): void;
    public function remove(Admin $admin): void;
    public function all(): array;

}