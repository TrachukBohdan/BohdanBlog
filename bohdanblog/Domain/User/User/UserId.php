<?php

namespace Domain\User\User;

use Domain\IdentityValueObjectInterface;
use Domain\ValueObjectInterface;
use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\UuidInterface;

final class UserId implements IdentityValueObjectInterface
{
    /**
     * @var UuidInterface
     */
    private $uuid;

    /**
     * @return UserId
     * @throws \Exception
     */
    public static function generate(): UserId
    {
        return new self(Uuid::uuid4());
    }

    /**
     * @param string $userId
     * @return UserId
     */
    public static function fromString(string $userId): UserId
    {
        return new self(Uuid::fromString($userId));
    }

    /**
     * AdminId constructor.
     * @param UuidInterface $uuid
     */
    private function __construct(UuidInterface $uuid)
    {
        $this->uuid = $uuid;
    }

    public function __toString(): string
    {
        return $this->uuid->toString();
    }

    /**
     * @param ValueObjectInterface $other
     * @return bool
     */
    public function sameValueAs($other): bool
    {
        return \get_class($this) === \get_class($other) && $this->uuid->equals($other->uuid);
    }
}