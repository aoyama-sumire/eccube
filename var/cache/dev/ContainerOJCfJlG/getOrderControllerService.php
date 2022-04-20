<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'Eccube\Controller\Admin\Order\OrderController' shared autowired service.

include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'dependency-injection'.\DIRECTORY_SEPARATOR.'ContainerAwareInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'dependency-injection'.\DIRECTORY_SEPARATOR.'ContainerAwareTrait.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'ControllerTrait.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'Controller.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'Admin'.\DIRECTORY_SEPARATOR.'Order'.\DIRECTORY_SEPARATOR.'OrderController.php';

$this->services['Eccube\\Controller\\Admin\\Order\\OrderController'] = $instance = new \Eccube\Controller\Admin\Order\OrderController(($this->privates['eccube.purchase.flow.order'] ?? $this->load('getEccube_Purchase_Flow_OrderService.php')), ($this->privates['Eccube\\Service\\CsvExportService'] ?? $this->load('getCsvExportServiceService.php')), ($this->privates['Eccube\\Repository\\CustomerRepository'] ?? $this->load('getCustomerRepositoryService.php')), ($this->privates['Eccube\\Repository\\PaymentRepository'] ?? $this->load('getPaymentRepositoryService.php')), ($this->privates['Eccube\\Repository\\Master\\SexRepository'] ?? $this->load('getSexRepositoryService.php')), ($this->privates['Eccube\\Repository\\Master\\OrderStatusRepository'] ?? $this->load('getOrderStatusRepositoryService.php')), ($this->privates['Eccube\\Repository\\Master\\PageMaxRepository'] ?? $this->load('getPageMaxRepositoryService.php')), ($this->privates['Eccube\\Repository\\Master\\ProductStatusRepository'] ?? $this->load('getProductStatusRepositoryService.php')), ($this->privates['Eccube\\Repository\\ProductStockRepository'] ?? $this->load('getProductStockRepositoryService.php')), ($this->privates['Eccube\\Repository\\OrderRepository'] ?? $this->getOrderRepositoryService()), ($this->privates['Eccube\\Repository\\OrderPdfRepository'] ?? $this->load('getOrderPdfRepositoryService.php')), ($this->services['validator'] ?? $this->getValidatorService()), ($this->privates['Eccube\\Service\\OrderStateMachine'] ?? $this->load('getOrderStateMachineService.php')), ($this->privates['Eccube\\Service\\MailService'] ?? $this->load('getMailServiceService.php')));

$instance->setEccubeConfig(($this->services['Eccube\\Common\\EccubeConfig'] ?? ($this->services['Eccube\\Common\\EccubeConfig'] = new \Eccube\Common\EccubeConfig($this))));
$instance->setEntityManager(($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()));
$instance->setTranslator(($this->services['translator'] ?? $this->getTranslatorService()));
$instance->setSession(($this->services['session'] ?? $this->getSessionService()));
$instance->setFormFactory(($this->services['form.factory'] ?? $this->load('getForm_FactoryService.php')));
$instance->setEventDispatcher(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()));

return $instance;
