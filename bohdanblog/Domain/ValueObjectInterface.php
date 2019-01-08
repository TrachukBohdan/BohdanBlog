<?php

namespace Domain;

interface ValueObjectInterface
{
    public function sameValueAs($object): bool;
}