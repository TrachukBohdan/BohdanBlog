<?php

namespace Domain\Admin;

use Domain\ValueObjectInterface;
use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\UuidInterface;

final class AdminId implements ValueObjectInterface
{
    /**
     * @var UuidInterface
     */
    private $uuid;

    /**
     * @return AdminId
     * @throws \Exception
     */
    public static function generate(): AdminId
    {
        return new self(Uuid::uuid4());
    }

    /**
     * @param string $userId
     * @return AdminId
     */
    public static function fromString(string $userId): AdminId
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

    /**
     * @return string
     */
    public function toString(): string
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