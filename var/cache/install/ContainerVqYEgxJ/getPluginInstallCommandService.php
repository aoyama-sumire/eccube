<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'Eccube\Command\PluginInstallCommand' shared autowired service.

include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'PluginCommandTrait.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'PluginInstallCommand.php';

$this->privates['Eccube\\Command\\PluginInstallCommand'] = $instance = new \Eccube\Command\PluginInstallCommand();

$instance->setPluginService(($this->services['Eccube\\Service\\PluginService'] ?? $this->load('getPluginServiceService.php')));
$instance->setPluginRepository(($this->services['Eccube\\Repository\\PluginRepository'] ?? $this->getPluginRepositoryService()));
$instance->setName('eccube:plugin:install');

return $instance;
