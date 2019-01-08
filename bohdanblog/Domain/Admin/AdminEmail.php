<?php

namespace Domain\Admin;

use Domain\ValueObjectInterface;

/**
 * Class Adminemail
 * @package Domain\Admin
 */
final class AdminEmail implements ValueObjectInterface
{
    /**
     * @var string
     */
    private $email;

    /**
     * Adminemail constructor.
     * @param string $email
     */
    private function __construct(string $email)
    {
        $this->email = $email;
    }

    /**
     * @param string $email
     * @return AdminEmail
     */
    public static function createFromString(string $email): AdminEmail
    {
        return new AdminEmail($email);
    }

    /**
     * @return string
     */
    public function toString(): string
    {
        return $this->email;
    }

    /**
     * @param $object
     * @return bool
     */
    public function sameValueAs($object): bool
    {
        return \get_class($this) === \get_class($object) && $this->toString() === $object->toString();
    }
}