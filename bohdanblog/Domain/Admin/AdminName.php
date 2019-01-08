<?php

namespace Domain\Admin;

use Domain\ValueObjectInterface;

/**
 * Class AdminName
 * @package Domain\Admin
 */
final class AdminName implements ValueObjectInterface
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
     * @return AdminName
     */
    public static function createFromString(string $name): AdminName
    {
        return new AdminName($name);
    }

    /**
     * @return string
     */
    public function toString(): string
    {
        return $this->name;
    }

    /**
     * @param AdminName $object
     * @return bool
     */
    public function sameValueAs($object): bool
    {
        return \get_class($this) === \get_class($object) && $this->toString() === $object->toString();
    }
}