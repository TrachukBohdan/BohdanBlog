<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'twig.runtime.httpkernel' shared service.

include_once $this->targetDirs[5].'/vendor/symfony/twig-bridge/Extension/HttpKernelRuntime.php';
include_once $this->targetDirs[5].'/vendor/symfony/http-kernel/Fragment/FragmentHandler.php';
include_once $this->targetDirs[5].'/vendor/symfony/http-kernel/DependencyInjection/LazyLoadingFragmentHandler.php';

return $this->privates['twig.runtime.httpkernel'] = new \Symfony\Bridge\Twig\Extension\HttpKernelRuntime(new \Symfony\Component\HttpKernel\DependencyInjection\LazyLoadingFragmentHandler(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, array(
    'inline' => array('privates', 'fragment.renderer.inline', 'getFragment_Renderer_InlineService.php', true),
)), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), true));
