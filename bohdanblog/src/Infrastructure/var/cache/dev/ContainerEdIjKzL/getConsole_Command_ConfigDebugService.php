<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'console.command.config_debug' shared service.

include_once $this->targetDirs[5].'/vendor/symfony/console/Command/Command.php';
include_once $this->targetDirs[5].'/vendor/symfony/framework-bundle/Command/ContainerDebugCommand.php';
include_once $this->targetDirs[5].'/vendor/symfony/framework-bundle/Command/AbstractConfigCommand.php';
include_once $this->targetDirs[5].'/vendor/symfony/framework-bundle/Command/ConfigDebugCommand.php';

$this->privates['console.command.config_debug'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\ConfigDebugCommand();

$instance->setName('debug:config');

return $instance;
