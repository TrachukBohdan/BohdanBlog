<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'translation.loader.json' shared service.

include_once $this->targetDirs[5].'/vendor/symfony/translation/Loader/LoaderInterface.php';
include_once $this->targetDirs[5].'/vendor/symfony/translation/Loader/ArrayLoader.php';
include_once $this->targetDirs[5].'/vendor/symfony/translation/Loader/FileLoader.php';
include_once $this->targetDirs[5].'/vendor/symfony/translation/Loader/JsonFileLoader.php';

return $this->privates['translation.loader.json'] = new \Symfony\Component\Translation\Loader\JsonFileLoader();
