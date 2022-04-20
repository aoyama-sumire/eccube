<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'Eccube\Command\GenerateDummyDataCommand' shared autowired service.

include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'GenerateDummyDataCommand.php';

$this->privates['Eccube\\Command\\GenerateDummyDataCommand'] = $instance = new \Eccube\Command\GenerateDummyDataCommand(($this->privates['Eccube\\Tests\\Fixture\\Generator'] ?? $this->load('getGeneratorService.php')), ($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()), ($this->privates['Eccube\\Repository\\DeliveryRepository'] ?? $this->load('getDeliveryRepositoryService.php')), ($this->privates['Eccube\\Repository\\ProductRepository'] ?? $this->getProductRepositoryService()));

$instance->setName('eccube:fixtures:generate');

return $instance;
