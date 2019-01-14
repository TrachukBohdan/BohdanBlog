<?php

namespace Domain\User\User;

use Domain\ValueObjectInterface;

/**
 * Class AdminName
 * @package Domain\Admin
 */
final class UserName implements ValueObjectInterface
{
    /**
     * @var string
     */
    private $name;

    /**
     * AdminName constructor.
     * @param string $name
     */
    private function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * @param string $name
     * @return UserName
     */
    public static function createFromString(string $name): UserName
    {
        return new UserName($name);
    }

    /**
     * @return string
     */
    public function toString(): string
    {
        return $this->name;
    }

    /**
     * @param UserName $object
     * @return bool
     */
    public function sameValueAs($object): bool
    {
        return \get_class($this) === \get_class($object) && $this->toString() === $object->toString();
    }
}