<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'console.command.event_dispatcher_debug' shared service.

include_once $this->targetDirs[5].'/vendor/symfony/console/Command/Command.php';
include_once $this->targetDirs[5].'/vendor/symfony/framework-bundle/Command/EventDispatcherDebugCommand.php';

$this->privates['console.command.event_dispatcher_debug'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\EventDispatcherDebugCommand(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()));

$instance->setName('debug:event-dispatcher');

return $instance;
