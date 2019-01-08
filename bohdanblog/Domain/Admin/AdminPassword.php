<?php

namespace Domain\Admin;

use Domain\ValueObjectInterface;

/**
 * Class AdminPassword
 * @package Domain\Admin
 */
final class AdminPassword implements ValueObjectInterface
{
    /**
     * @var string
     */
    private $password;

    /**
     * AdminPassword constructor.
     * @param string $password
     */
    private function __construct(string $password)
    {
        $this->password = $password;
    }

    /**
     * @param string $password
     * @return AdminPassword
     */
    public static function createFromString(string $password): AdminPassword
    {
        return new AdminPassword($password);
    }

    /**
     * @return string
     */
    public function toString(): string
    {
        return $this->password;
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