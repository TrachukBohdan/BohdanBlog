<?php

namespace Domain\Admin;

final class Admin
{
    private $adminId;

    private $email;

    private $password;

    /**
     * Admin constructor.
     * @param AdminId $adminId
     * @param AdminEmail $email
     * @param AdminPassword $password
     */
    private function __construct(
        AdminId $adminId,
        AdminEmail $email,
        AdminPassword $password
    ) {
        $this->adminId = $adminId;
        $this->email = $email;
        $this->password = $password;
    }

    /**
     * @param AdminId $adminId
     * @param AdminEmail $email
     * @param AdminPassword $password
     * @return Admin
     */
    public static function createAdminWithData(
        AdminId $adminId,
        AdminEmail $email,
        AdminPassword $password
    ): Admin {
        return new Admin($adminId, $email, $password);
    }

    public function id(): AdminId
    {
        return $this->adminId;
    }

    public function email(): AdminEmail
    {
        return $this->email;
    }

    public function password(): AdminPassword
    {
        return $this->password;
    }
}