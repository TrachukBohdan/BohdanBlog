<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'session.storage.native' shared service.

include_once $this->targetDirs[5].'/vendor/symfony/http-foundation/Session/Storage/SessionStorageInterface.php';
include_once $this->targetDirs[5].'/vendor/symfony/http-foundation/Session/Storage/NativeSessionStorage.php';
include_once $this->targetDirs[5].'/vendor/symfony/http-foundation/Session/SessionBagInterface.php';
include_once $this->targetDirs[5].'/vendor/symfony/http-foundation/Session/Storage/MetadataBag.php';

return $this->privates['session.storage.native'] = new \Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage($this->parameters['session.storage.options'], NULL, new \Symfony\Component\HttpFoundation\Session\Storage\MetadataBag('_sf2_meta', 0));