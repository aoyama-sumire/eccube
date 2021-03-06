<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'Eccube\Form\Type\Shopping\OrderType' shared autowired service.

include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'FormTypeInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'AbstractType.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Form'.\DIRECTORY_SEPARATOR.'Type'.\DIRECTORY_SEPARATOR.'Shopping'.\DIRECTORY_SEPARATOR.'OrderType.php';

return $this->privates['Eccube\\Form\\Type\\Shopping\\OrderType'] = new \Eccube\Form\Type\Shopping\OrderType(($this->privates['Eccube\\Repository\\OrderRepository'] ?? $this->getOrderRepositoryService()), ($this->privates['Eccube\\Repository\\DeliveryRepository'] ?? $this->load('getDeliveryRepositoryService.php')), ($this->privates['Eccube\\Repository\\PaymentRepository'] ?? $this->load('getPaymentRepositoryService.php')), ($this->privates['Eccube\\Repository\\BaseInfoRepository'] ?? $this->getBaseInfoRepositoryService()), ($this->privates['Eccube\\Request\\Context'] ?? $this->load('getContextService.php')));
