<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'eccube.purchase.flow.shopping' shared service.

include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'PurchaseFlow'.\DIRECTORY_SEPARATOR.'PurchaseFlow.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'collections'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Common'.\DIRECTORY_SEPARATOR.'Collections'.\DIRECTORY_SEPARATOR.'Collection.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'collections'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Common'.\DIRECTORY_SEPARATOR.'Collections'.\DIRECTORY_SEPARATOR.'ArrayCollection.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'PurchaseFlow'.\DIRECTORY_SEPARATOR.'ValidatorTrait.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'PurchaseFlow'.\DIRECTORY_SEPARATOR.'ItemHolderValidator.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'PurchaseFlow'.\DIRECTORY_SEPARATOR.'Processor'.\DIRECTORY_SEPARATOR.'StockMultipleValidator.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'PurchaseFlow'.\DIRECTORY_SEPARATOR.'Processor'.\DIRECTORY_SEPARATOR.'SaleLimitMultipleValidator.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'PurchaseFlow'.\DIRECTORY_SEPARATOR.'ItemHolderPreprocessor.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'PurchaseFlow'.\DIRECTORY_SEPARATOR.'Processor'.\DIRECTORY_SEPARATOR.'DeliveryFeePreprocessor.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'PurchaseFlow'.\DIRECTORY_SEPARATOR.'Processor'.\DIRECTORY_SEPARATOR.'DeliveryFeeFreeByShippingPreprocessor.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'PurchaseFlow'.\DIRECTORY_SEPARATOR.'Processor'.\DIRECTORY_SEPARATOR.'PaymentChargePreprocessor.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'PurchaseFlow'.\DIRECTORY_SEPARATOR.'ItemHolderPostValidator.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'PurchaseFlow'.\DIRECTORY_SEPARATOR.'Processor'.\DIRECTORY_SEPARATOR.'PaymentChargeChangeValidator.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'PurchaseFlow'.\DIRECTORY_SEPARATOR.'Processor'.\DIRECTORY_SEPARATOR.'DeliveryFeeChangeValidator.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'PurchaseFlow'.\DIRECTORY_SEPARATOR.'PurchaseProcessor.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'PurchaseFlow'.\DIRECTORY_SEPARATOR.'Processor'.\DIRECTORY_SEPARATOR.'PreOrderIdValidator.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'PurchaseFlow'.\DIRECTORY_SEPARATOR.'Processor'.\DIRECTORY_SEPARATOR.'AbstractPurchaseProcessor.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'PurchaseFlow'.\DIRECTORY_SEPARATOR.'Processor'.\DIRECTORY_SEPARATOR.'CustomerPurchaseInfoProcessor.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'PurchaseFlow'.\DIRECTORY_SEPARATOR.'Processor'.\DIRECTORY_SEPARATOR.'OrderUpdateProcessor.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'PurchaseFlow'.\DIRECTORY_SEPARATOR.'ItemValidator.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'PurchaseFlow'.\DIRECTORY_SEPARATOR.'Processor'.\DIRECTORY_SEPARATOR.'ProductStatusValidator.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'PurchaseFlow'.\DIRECTORY_SEPARATOR.'Processor'.\DIRECTORY_SEPARATOR.'PriceChangeValidator.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'PurchaseFlow'.\DIRECTORY_SEPARATOR.'Processor'.\DIRECTORY_SEPARATOR.'PaymentTotalNegativeValidator.php';

$this->privates['eccube.purchase.flow.shopping'] = $instance = new \Eccube\Service\PurchaseFlow\PurchaseFlow();

$a = ($this->privates['Eccube\\Repository\\ProductClassRepository'] ?? $this->getProductClassRepositoryService());
$b = ($this->privates['Eccube\\Service\\PurchaseFlow\\Processor\\TaxProcessor'] ?? $this->load('getTaxProcessorService.php'));
$c = ($this->privates['Eccube\\Repository\\BaseInfoRepository'] ?? $this->getBaseInfoRepositoryService());
$d = ($this->privates['Eccube\\Service\\PurchaseFlow\\Processor\\PointProcessor'] ?? $this->load('getPointProcessorService.php'));

$instance->setFlowType('shopping');
$instance->setItemValidators(new \Doctrine\Common\Collections\ArrayCollection([0 => ($this->privates['Eccube\\Service\\PurchaseFlow\\Processor\\DeliverySettingValidator'] ?? $this->load('getDeliverySettingValidatorService.php')), 1 => ($this->privates['Eccube\\Service\\PurchaseFlow\\Processor\\ProductStatusValidator'] ?? ($this->privates['Eccube\\Service\\PurchaseFlow\\Processor\\ProductStatusValidator'] = new \Eccube\Service\PurchaseFlow\Processor\ProductStatusValidator())), 2 => ($this->privates['Eccube\\Service\\PurchaseFlow\\Processor\\PriceChangeValidator'] ?? ($this->privates['Eccube\\Service\\PurchaseFlow\\Processor\\PriceChangeValidator'] = new \Eccube\Service\PurchaseFlow\Processor\PriceChangeValidator()))]));
$instance->setItemHolderValidators(new \Doctrine\Common\Collections\ArrayCollection([0 => new \Eccube\Service\PurchaseFlow\Processor\StockMultipleValidator($a), 1 => new \Eccube\Service\PurchaseFlow\Processor\SaleLimitMultipleValidator($a), 2 => ($this->privates['Eccube\\Service\\PurchaseFlow\\Processor\\EmptyItemsValidator'] ?? $this->load('getEmptyItemsValidatorService.php'))]));
$instance->setItemHolderPreprocessors(new \Doctrine\Common\Collections\ArrayCollection([0 => $b, 1 => ($this->privates['Eccube\\Service\\PurchaseFlow\\Processor\\OrderNoProcessor'] ?? $this->load('getOrderNoProcessorService.php')), 2 => new \Eccube\Service\PurchaseFlow\Processor\DeliveryFeePreprocessor($c, ($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()), ($this->privates['Eccube\\Repository\\TaxRuleRepository'] ?? $this->getTaxRuleRepositoryService()), ($this->privates['Eccube\\Repository\\DeliveryFeeRepository'] ?? $this->load('getDeliveryFeeRepositoryService.php'))), 3 => new \Eccube\Service\PurchaseFlow\Processor\DeliveryFeeFreeByShippingPreprocessor($c), 4 => new \Eccube\Service\PurchaseFlow\Processor\PaymentChargePreprocessor(($this->privates['Eccube\\Repository\\Master\\OrderItemTypeRepository'] ?? $this->load('getOrderItemTypeRepositoryService.php')), ($this->privates['Eccube\\Repository\\Master\\TaxDisplayTypeRepository'] ?? $this->load('getTaxDisplayTypeRepositoryService.php')), ($this->privates['Eccube\\Repository\\Master\\TaxTypeRepository'] ?? $this->load('getTaxTypeRepositoryService.php'))), 5 => $b]));
$instance->setDiscountProcessors(new \Doctrine\Common\Collections\ArrayCollection([0 => $d]));
$instance->setItemHolderPostValidators(new \Doctrine\Common\Collections\ArrayCollection([0 => ($this->privates['Eccube\\Service\\PurchaseFlow\\Processor\\AddPointProcessor'] ?? $this->load('getAddPointProcessorService.php')), 1 => ($this->privates['Eccube\\Service\\PurchaseFlow\\Processor\\PaymentTotalLimitValidator'] ?? $this->load('getPaymentTotalLimitValidatorService.php')), 2 => ($this->privates['Eccube\\Service\\PurchaseFlow\\Processor\\PaymentTotalNegativeValidator'] ?? ($this->privates['Eccube\\Service\\PurchaseFlow\\Processor\\PaymentTotalNegativeValidator'] = new \Eccube\Service\PurchaseFlow\Processor\PaymentTotalNegativeValidator())), 3 => new \Eccube\Service\PurchaseFlow\Processor\PaymentChargeChangeValidator(), 4 => new \Eccube\Service\PurchaseFlow\Processor\DeliveryFeeChangeValidator()]));
$instance->setPurchaseProcessors(new \Doctrine\Common\Collections\ArrayCollection([0 => new \Eccube\Service\PurchaseFlow\Processor\PreOrderIdValidator(($this->privates['Eccube\\Service\\CartService'] ?? $this->getCartServiceService())), 1 => $d, 2 => ($this->privates['Eccube\\Service\\PurchaseFlow\\Processor\\StockReduceProcessor'] ?? $this->load('getStockReduceProcessorService.php')), 3 => new \Eccube\Service\PurchaseFlow\Processor\CustomerPurchaseInfoProcessor(), 4 => new \Eccube\Service\PurchaseFlow\Processor\OrderUpdateProcessor(($this->privates['Eccube\\Repository\\Master\\OrderStatusRepository'] ?? $this->load('getOrderStatusRepositoryService.php')))]));

return $instance;