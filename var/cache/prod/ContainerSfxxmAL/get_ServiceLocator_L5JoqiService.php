<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.L5_joqi' shared service.

return $this->privates['.service_locator.L5_joqi'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'migration' => ['privates', '.errored..service_locator.L5_joqi.Doctrine\\DBAL\\Migrations\\Migration', NULL, 'Cannot autowire service ".service_locator.L5_joqi": it references class "Doctrine\\DBAL\\Migrations\\Migration" but no such service exists.'],
], [
    'migration' => 'Doctrine\\DBAL\\Migrations\\Migration',
]);