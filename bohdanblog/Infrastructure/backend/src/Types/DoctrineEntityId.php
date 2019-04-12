<?php

namespace Infrastructure\Types;

use Doctrine\DBAL\Platforms\AbstractPlatform;
use Doctrine\DBAL\Types\GuidType;
use Domain\IdentityValueObjectInterface;

class DoctrineEntityId extends GuidType
{
    /**
     * @param mixed $value
     * @param AbstractPlatform $platform
     * @return mixed
     * @throws \Exception
     */
    public function convertToDatabaseValue($value, AbstractPlatform $platform)
    {
        if (!($value instanceof IdentityValueObjectInterface)) {
            throw new \Exception('It should be an identity object');
        }

        return $value->__toString();
    }

    /**
     * @param mixed $value
     * @param AbstractPlatform $platform
     * @return mixed
     * @throws \Exception
     */
    public function convertToPHPValue($value, AbstractPlatform $platform)
    {
        $className = $this->getNamespace().'\\'.$this->getName();

        if (false === class_implements($className, IdentityValueObjectInterface::class)) {
            throw new \Exception('It should be an identity object');
        }

        return call_user_func([$className, 'createFromString'], $value);
    }
}