<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'console.command.form_debug' shared service.

include_once $this->targetDirs[5].'/vendor/symfony/console/Command/Command.php';
include_once $this->targetDirs[5].'/vendor/symfony/form/Command/DebugCommand.php';

$this->privates['console.command.form_debug'] = $instance = new \Symfony\Component\Form\Command\DebugCommand(($this->privates['form.registry'] ?? $this->load('getForm_RegistryService.php')), array(0 => 'Symfony\\Component\\Form\\Extension\\Core\\Type', 1 => 'Symfony\\Bridge\\Doctrine\\Form\\Type'), array(0 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType', 1 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType', 2 => 'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType'), array(0 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TransformationFailureExtension', 1 => 'Symfony\\Component\\Form\\Extension\\HttpFoundation\\Type\\FormTypeHttpFoundationExtension', 2 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\FormTypeValidatorExtension', 3 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\RepeatedTypeValidatorExtension', 4 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\SubmitTypeValidatorExtension', 5 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\UploadValidatorExtension', 6 => 'Symfony\\Component\\Form\\Extension\\Csrf\\Type\\FormTypeCsrfExtension', 7 => 'Symfony\\Component\\Form\\Extension\\DataCollector\\Type\\DataCollectorTypeExtension'), array(0 => 'Symfony\\Component\\Form\\Extension\\Validator\\ValidatorTypeGuesser', 1 => 'Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmTypeGuesser'));

$instance->setName('debug:form');

return $instance;
