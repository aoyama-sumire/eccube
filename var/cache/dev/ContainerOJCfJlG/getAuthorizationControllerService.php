<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'Trikoder\Bundle\OAuth2Bundle\Controller\AuthorizationController' shared service.

include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'trikoder'.\DIRECTORY_SEPARATOR.'oauth2-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AuthorizationController.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'trikoder'.\DIRECTORY_SEPARATOR.'oauth2-bundle'.\DIRECTORY_SEPARATOR.'Event'.\DIRECTORY_SEPARATOR.'AuthorizationRequestResolveEventFactory.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'trikoder'.\DIRECTORY_SEPARATOR.'oauth2-bundle'.\DIRECTORY_SEPARATOR.'Converter'.\DIRECTORY_SEPARATOR.'UserConverterInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'trikoder'.\DIRECTORY_SEPARATOR.'oauth2-bundle'.\DIRECTORY_SEPARATOR.'Converter'.\DIRECTORY_SEPARATOR.'UserConverter.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'trikoder'.\DIRECTORY_SEPARATOR.'oauth2-bundle'.\DIRECTORY_SEPARATOR.'Converter'.\DIRECTORY_SEPARATOR.'ScopeConverterInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'trikoder'.\DIRECTORY_SEPARATOR.'oauth2-bundle'.\DIRECTORY_SEPARATOR.'Converter'.\DIRECTORY_SEPARATOR.'ScopeConverter.php';

return $this->services['Trikoder\\Bundle\\OAuth2Bundle\\Controller\\AuthorizationController'] = new \Trikoder\Bundle\OAuth2Bundle\Controller\AuthorizationController(($this->privates['League\\OAuth2\\Server\\AuthorizationServer'] ?? $this->load('getAuthorizationServerService.php')), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), new \Trikoder\Bundle\OAuth2Bundle\Event\AuthorizationRequestResolveEventFactory(($this->privates['Trikoder\\Bundle\\OAuth2Bundle\\Converter\\ScopeConverter'] ?? ($this->privates['Trikoder\\Bundle\\OAuth2Bundle\\Converter\\ScopeConverter'] = new \Trikoder\Bundle\OAuth2Bundle\Converter\ScopeConverter())), ($this->services['Trikoder\\Bundle\\OAuth2Bundle\\Manager\\ClientManagerInterface'] ?? $this->load('getClientManagerInterfaceService.php'))), new \Trikoder\Bundle\OAuth2Bundle\Converter\UserConverter());
