<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.ay92emq' shared service.

return $this->privates['.service_locator.ay92emq'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'cacheUtil' => ['privates', 'Eccube\\Util\\CacheUtil', 'getCacheUtilService.php', true],
    'router' => ['services', 'router', 'getRouterService', false],
], [
    'cacheUtil' => 'Eccube\\Util\\CacheUtil',
    'router' => '?',
]);
