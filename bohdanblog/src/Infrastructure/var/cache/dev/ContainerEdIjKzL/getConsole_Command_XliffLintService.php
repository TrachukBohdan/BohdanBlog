<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'console.command.xliff_lint' shared service.

include_once $this->targetDirs[5].'/vendor/symfony/console/Command/Command.php';
include_once $this->targetDirs[5].'/vendor/symfony/translation/Command/XliffLintCommand.php';
include_once $this->targetDirs[5].'/vendor/symfony/framework-bundle/Command/XliffLintCommand.php';

$this->privates['console.command.xliff_lint'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\XliffLintCommand();

$instance->setName('lint:xliff');

return $instance;
