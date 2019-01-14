<?php

namespace Infrastructure\Types;

use Domain\User\User\UserId;

class DoctrineUserId extends DoctrineEntityId
{
    public function getName()
    {
        return 'UserId';
    }

    protected function getNamespace()
    {
        return UserId::class;
    }
}