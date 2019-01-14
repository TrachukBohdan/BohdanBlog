<?php

namespace Domain;

use Domain\User\User\UserId;

interface IdentityValueObjectInterface extends ValueObjectInterface
{
    public static function generate(): UserId;
    public static function fromString(string $userId): UserId;
    public function __toString(): string;
}