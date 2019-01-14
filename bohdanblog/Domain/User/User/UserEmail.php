<?php

namespace Domain\User\User;

use Domain\ValueObjectInterface;

/**
 * Class Adminemail
 * @package Domain\Admin
 */
final class UserEmail implements ValueObjectInterface
{
    /**
     * @var string
     */
    private $email;

    /**
     * constructor.
     * @param string $email
     */
    private function __construct(string $email)
    {
        $this->email = $email;
    }

    /**
     * @param string $email
     * @return UserEmail
     */
    public static function createFromString(string $email): UserEmail
    {
        return new UserEmail($email);
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