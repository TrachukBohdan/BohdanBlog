<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'form.type_guesser.validator' shared service.

include_once $this->targetDirs[5].'/vendor/symfony/form/FormTypeGuesserInterface.php';
include_once $this->targetDirs[5].'/vendor/symfony/form/Extension/Validator/ValidatorTypeGuesser.php';

return $this->privates['form.type_guesser.validator'] = new \Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser(($this->services['validator'] ?? $this->getValidatorService()));
