<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'form.registry' shared service.

include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'FormRegistryInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'FormRegistry.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'FormExtensionInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'DependencyInjection'.\DIRECTORY_SEPARATOR.'DependencyInjectionExtension.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'ResolvedFormTypeFactoryInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'ResolvedFormTypeFactory.php';

return $this->privates['form.registry'] = new \Symfony\Component\Form\FormRegistry([0 => new \Symfony\Component\Form\Extension\DependencyInjection\DependencyInjectionExtension(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'Eccube\\Form\\Type\\AddCartType' => ['privates', 'Eccube\\Form\\Type\\AddCartType', 'getAddCartTypeService.php', true],
    'Eccube\\Form\\Type\\AddressType' => ['privates', 'Eccube\\Form\\Type\\AddressType', 'getAddressTypeService.php', true],
    'Eccube\\Form\\Type\\Admin\\AuthenticationType' => ['privates', 'Eccube\\Form\\Type\\Admin\\AuthenticationType', 'getAuthenticationTypeService.php', true],
    'Eccube\\Form\\Type\\Admin\\AuthorityRoleType' => ['privates', 'Eccube\\Form\\Type\\Admin\\AuthorityRoleType', 'getAuthorityRoleTypeService.php', true],
    'Eccube\\Form\\Type\\Admin\\BlockType' => ['privates', 'Eccube\\Form\\Type\\Admin\\BlockType', 'getBlockTypeService.php', true],
    'Eccube\\Form\\Type\\Admin\\CalendarType' => ['privates', 'Eccube\\Form\\Type\\Admin\\CalendarType', 'getCalendarTypeService.php', true],
    'Eccube\\Form\\Type\\Admin\\CategoryType' => ['privates', 'Eccube\\Form\\Type\\Admin\\CategoryType', 'getCategoryTypeService.php', true],
    'Eccube\\Form\\Type\\Admin\\ChangePasswordType' => ['privates', 'Eccube\\Form\\Type\\Admin\\ChangePasswordType', 'getChangePasswordTypeService.php', true],
    'Eccube\\Form\\Type\\Admin\\ClassCategoryType' => ['privates', 'Eccube\\Form\\Type\\Admin\\ClassCategoryType', 'getClassCategoryTypeService.php', true],
    'Eccube\\Form\\Type\\Admin\\ClassNameType' => ['privates', 'Eccube\\Form\\Type\\Admin\\ClassNameType', 'getClassNameTypeService.php', true],
    'Eccube\\Form\\Type\\Admin\\CsvImportType' => ['privates', 'Eccube\\Form\\Type\\Admin\\CsvImportType', 'getCsvImportTypeService.php', true],
    'Eccube\\Form\\Type\\Admin\\CustomerType' => ['privates', 'Eccube\\Form\\Type\\Admin\\CustomerType', 'getCustomerTypeService.php', true],
    'Eccube\\Form\\Type\\Admin\\DeliveryFeeType' => ['privates', 'Eccube\\Form\\Type\\Admin\\DeliveryFeeType', 'getDeliveryFeeTypeService.php', true],
    'Eccube\\Form\\Type\\Admin\\DeliveryTimeType' => ['privates', 'Eccube\\Form\\Type\\Admin\\DeliveryTimeType', 'getDeliveryTimeTypeService.php', true],
    'Eccube\\Form\\Type\\Admin\\DeliveryType' => ['privates', 'Eccube\\Form\\Type\\Admin\\DeliveryType', 'getDeliveryTypeService.php', true],
    'Eccube\\Form\\Type\\Admin\\LayoutType' => ['privates', 'Eccube\\Form\\Type\\Admin\\LayoutType', 'getLayoutTypeService.php', true],
    'Eccube\\Form\\Type\\Admin\\LogType' => ['privates', 'Eccube\\Form\\Type\\Admin\\LogType', 'getLogTypeService.php', true],
    'Eccube\\Form\\Type\\Admin\\LoginType' => ['privates', 'Eccube\\Form\\Type\\Admin\\LoginType', 'getLoginTypeService.php', true],
    'Eccube\\Form\\Type\\Admin\\MailType' => ['privates', 'Eccube\\Form\\Type\\Admin\\MailType', 'getMailTypeService.php', true],
    'Eccube\\Form\\Type\\Admin\\MainEditType' => ['privates', 'Eccube\\Form\\Type\\Admin\\MainEditType', 'getMainEditTypeService.php', true],
    'Eccube\\Form\\Type\\Admin\\MasterdataDataType' => ['privates', 'Eccube\\Form\\Type\\Admin\\MasterdataDataType', 'getMasterdataDataTypeService.php', true],
    'Eccube\\Form\\Type\\Admin\\MasterdataEditType' => ['privates', 'Eccube\\Form\\Type\\Admin\\MasterdataEditType', 'getMasterdataEditTypeService.php', true],
    'Eccube\\Form\\Type\\Admin\\MasterdataType' => ['privates', 'Eccube\\Form\\Type\\Admin\\MasterdataType', 'getMasterdataTypeService.php', true],
    'Eccube\\Form\\Type\\Admin\\MemberType' => ['privates', 'Eccube\\Form\\Type\\Admin\\MemberType', 'getMemberTypeService.php', true],
    'Eccube\\Form\\Type\\Admin\\NewsType' => ['privates', 'Eccube\\Form\\Type\\Admin\\NewsType', 'getNewsTypeService.php', true],
    'Eccube\\Form\\Type\\Admin\\OrderItemForShippingRegistrationType' => ['privates', 'Eccube\\Form\\Type\\Admin\\OrderItemForShippingRegistrationType', 'getOrderItemForShippingRegistrationTypeService.php', true],
    'Eccube\\Form\\Type\\Admin\\OrderItemType' => ['privates', 'Eccube\\Form\\Type\\Admin\\OrderItemType', 'getOrderItemTypeService.php', true],
    'Eccube\\Form\\Type\\Admin\\OrderMailType' => ['privates', 'Eccube\\Form\\Type\\Admin\\OrderMailType', 'getOrderMailTypeService.php', true],
    'Eccube\\Form\\Type\\Admin\\OrderPdfType' => ['privates', 'Eccube\\Form\\Type\\Admin\\OrderPdfType', 'getOrderPdfTypeService.php', true],
    'Eccube\\Form\\Type\\Admin\\OrderStatusSettingType' => ['privates', 'Eccube\\Form\\Type\\Admin\\OrderStatusSettingType', 'getOrderStatusSettingTypeService.php', true],
    'Eccube\\Form\\Type\\Admin\\OrderType' => ['privates', 'Eccube\\Form\\Type\\Admin\\OrderType', 'getOrderTypeService.php', true],
    'Eccube\\Form\\Type\\Admin\\PageType' => ['privates', 'Eccube\\Form\\Type\\Admin\\PageType', 'getPageTypeService.php', true],
    'Eccube\\Form\\Type\\Admin\\PaymentRegisterType' => ['privates', 'Eccube\\Form\\Type\\Admin\\PaymentRegisterType', 'getPaymentRegisterTypeService.php', true],
    'Eccube\\Form\\Type\\Admin\\PluginLocalInstallType' => ['privates', 'Eccube\\Form\\Type\\Admin\\PluginLocalInstallType', 'getPluginLocalInstallTypeService.php', true],
    'Eccube\\Form\\Type\\Admin\\PluginManagementType' => ['privates', 'Eccube\\Form\\Type\\Admin\\PluginManagementType', 'getPluginManagementTypeService.php', true],
    'Eccube\\Form\\Type\\Admin\\ProductClassEditType' => ['privates', 'Eccube\\Form\\Type\\Admin\\ProductClassEditType', 'getProductClassEditTypeService.php', true],
    'Eccube\\Form\\Type\\Admin\\ProductClassMatrixType' => ['privates', 'Eccube\\Form\\Type\\Admin\\ProductClassMatrixType', 'getProductClassMatrixTypeService.php', true],
    'Eccube\\Form\\Type\\Admin\\ProductClassType' => ['privates', 'Eccube\\Form\\Type\\Admin\\ProductClassType', 'getProductClassTypeService.php', true],
    'Eccube\\Form\\Type\\Admin\\ProductTag' => ['privates', 'Eccube\\Form\\Type\\Admin\\ProductTag', 'getProductTagService.php', true],
    'Eccube\\Form\\Type\\Admin\\ProductType' => ['privates', 'Eccube\\Form\\Type\\Admin\\ProductType', 'getProductTypeService.php', true],
    'Eccube\\Form\\Type\\Admin\\SearchCustomerType' => ['privates', 'Eccube\\Form\\Type\\Admin\\SearchCustomerType', 'getSearchCustomerTypeService.php', true],
    'Eccube\\Form\\Type\\Admin\\SearchLoginHistoryType' => ['privates', 'Eccube\\Form\\Type\\Admin\\SearchLoginHistoryType', 'getSearchLoginHistoryTypeService.php', true],
    'Eccube\\Form\\Type\\Admin\\SearchOrderType' => ['privates', 'Eccube\\Form\\Type\\Admin\\SearchOrderType', 'getSearchOrderTypeService.php', true],
    'Eccube\\Form\\Type\\Admin\\SearchPluginApiType' => ['privates', 'Eccube\\Form\\Type\\Admin\\SearchPluginApiType', 'getSearchPluginApiTypeService.php', true],
    'Eccube\\Form\\Type\\Admin\\SearchProductType' => ['privates', 'Eccube\\Form\\Type\\Admin\\SearchProductType', 'getSearchProductTypeService.php', true],
    'Eccube\\Form\\Type\\Admin\\SecurityType' => ['privates', 'Eccube\\Form\\Type\\Admin\\SecurityType', 'getSecurityTypeService.php', true],
    'Eccube\\Form\\Type\\Admin\\ShippingType' => ['privates', 'Eccube\\Form\\Type\\Admin\\ShippingType', 'getShippingTypeService.php', true],
    'Eccube\\Form\\Type\\Admin\\ShopMasterType' => ['privates', 'Eccube\\Form\\Type\\Admin\\ShopMasterType', 'getShopMasterTypeService.php', true],
    'Eccube\\Form\\Type\\Admin\\TagType' => ['privates', 'Eccube\\Form\\Type\\Admin\\TagType', 'getTagTypeService.php', true],
    'Eccube\\Form\\Type\\Admin\\TaxRuleType' => ['privates', 'Eccube\\Form\\Type\\Admin\\TaxRuleType', 'getTaxRuleTypeService.php', true],
    'Eccube\\Form\\Type\\Admin\\TemplateType' => ['privates', 'Eccube\\Form\\Type\\Admin\\TemplateType', 'getTemplateTypeService.php', true],
    'Eccube\\Form\\Type\\Admin\\TwoFactorAuthType' => ['privates', 'Eccube\\Form\\Type\\Admin\\TwoFactorAuthType', 'getTwoFactorAuthTypeService.php', true],
    'Eccube\\Form\\Type\\Front\\ContactType' => ['privates', 'Eccube\\Form\\Type\\Front\\ContactType', 'getContactTypeService.php', true],
    'Eccube\\Form\\Type\\Front\\CustomerAddressType' => ['privates', 'Eccube\\Form\\Type\\Front\\CustomerAddressType', 'getCustomerAddressTypeService.php', true],
    'Eccube\\Form\\Type\\Front\\CustomerLoginType' => ['privates', 'Eccube\\Form\\Type\\Front\\CustomerLoginType', 'getCustomerLoginTypeService.php', true],
    'Eccube\\Form\\Type\\Front\\EntryType' => ['privates', 'Eccube\\Form\\Type\\Front\\EntryType', 'getEntryTypeService.php', true],
    'Eccube\\Form\\Type\\Front\\ForgotType' => ['privates', 'Eccube\\Form\\Type\\Front\\ForgotType', 'getForgotTypeService.php', true],
    'Eccube\\Form\\Type\\Front\\NonMemberType' => ['privates', 'Eccube\\Form\\Type\\Front\\NonMemberType', 'getNonMemberTypeService.php', true],
    'Eccube\\Form\\Type\\Front\\PasswordResetType' => ['privates', 'Eccube\\Form\\Type\\Front\\PasswordResetType', 'getPasswordResetTypeService.php', true],
    'Eccube\\Form\\Type\\Front\\ShoppingShippingType' => ['privates', 'Eccube\\Form\\Type\\Front\\ShoppingShippingType', 'getShoppingShippingTypeService.php', true],
    'Eccube\\Form\\Type\\Install\\Step1Type' => ['privates', 'Eccube\\Form\\Type\\Install\\Step1Type', 'getStep1TypeService.php', true],
    'Eccube\\Form\\Type\\Install\\Step3Type' => ['privates', 'Eccube\\Form\\Type\\Install\\Step3Type', 'getStep3TypeService.php', true],
    'Eccube\\Form\\Type\\Install\\Step4Type' => ['privates', 'Eccube\\Form\\Type\\Install\\Step4Type', 'getStep4TypeService.php', true],
    'Eccube\\Form\\Type\\Install\\Step5Type' => ['privates', 'Eccube\\Form\\Type\\Install\\Step5Type', 'getStep5TypeService.php', true],
    'Eccube\\Form\\Type\\KanaType' => ['privates', 'Eccube\\Form\\Type\\KanaType', 'getKanaTypeService.php', true],
    'Eccube\\Form\\Type\\MasterType' => ['privates', 'Eccube\\Form\\Type\\MasterType', 'getMasterTypeService.php', true],
    'Eccube\\Form\\Type\\Master\\CategoryType' => ['privates', 'Eccube\\Form\\Type\\Master\\CategoryType', 'getCategoryType2Service.php', true],
    'Eccube\\Form\\Type\\Master\\CsvType' => ['privates', 'Eccube\\Form\\Type\\Master\\CsvType', 'getCsvType2Service.php', true],
    'Eccube\\Form\\Type\\Master\\CustomerStatusType' => ['privates', 'Eccube\\Form\\Type\\Master\\CustomerStatusType', 'getCustomerStatusTypeService.php', true],
    'Eccube\\Form\\Type\\Master\\DeliveryDurationType' => ['privates', 'Eccube\\Form\\Type\\Master\\DeliveryDurationType', 'getDeliveryDurationTypeService.php', true],
    'Eccube\\Form\\Type\\Master\\DeviceTypeType' => ['privates', 'Eccube\\Form\\Type\\Master\\DeviceTypeType', 'getDeviceTypeTypeService.php', true],
    'Eccube\\Form\\Type\\Master\\JobType' => ['privates', 'Eccube\\Form\\Type\\Master\\JobType', 'getJobTypeService.php', true],
    'Eccube\\Form\\Type\\Master\\LoginHistoryStatusType' => ['privates', 'Eccube\\Form\\Type\\Master\\LoginHistoryStatusType', 'getLoginHistoryStatusTypeService.php', true],
    'Eccube\\Form\\Type\\Master\\MailTemplateType' => ['privates', 'Eccube\\Form\\Type\\Master\\MailTemplateType', 'getMailTemplateTypeService.php', true],
    'Eccube\\Form\\Type\\Master\\OrderStatusType' => ['privates', 'Eccube\\Form\\Type\\Master\\OrderStatusType', 'getOrderStatusTypeService.php', true],
    'Eccube\\Form\\Type\\Master\\PageMaxType' => ['privates', 'Eccube\\Form\\Type\\Master\\PageMaxType', 'getPageMaxTypeService.php', true],
    'Eccube\\Form\\Type\\Master\\PaymentType' => ['privates', 'Eccube\\Form\\Type\\Master\\PaymentType', 'getPaymentTypeService.php', true],
    'Eccube\\Form\\Type\\Master\\PrefType' => ['privates', 'Eccube\\Form\\Type\\Master\\PrefType', 'getPrefTypeService.php', true],
    'Eccube\\Form\\Type\\Master\\ProductListMaxType' => ['privates', 'Eccube\\Form\\Type\\Master\\ProductListMaxType', 'getProductListMaxTypeService.php', true],
    'Eccube\\Form\\Type\\Master\\ProductListOrderByType' => ['privates', 'Eccube\\Form\\Type\\Master\\ProductListOrderByType', 'getProductListOrderByTypeService.php', true],
    'Eccube\\Form\\Type\\Master\\ProductStatusType' => ['privates', 'Eccube\\Form\\Type\\Master\\ProductStatusType', 'getProductStatusTypeService.php', true],
    'Eccube\\Form\\Type\\Master\\RoundingTypeType' => ['privates', 'Eccube\\Form\\Type\\Master\\RoundingTypeType', 'getRoundingTypeTypeService.php', true],
    'Eccube\\Form\\Type\\Master\\SaleTypeType' => ['privates', 'Eccube\\Form\\Type\\Master\\SaleTypeType', 'getSaleTypeTypeService.php', true],
    'Eccube\\Form\\Type\\Master\\SexType' => ['privates', 'Eccube\\Form\\Type\\Master\\SexType', 'getSexTypeService.php', true],
    'Eccube\\Form\\Type\\NameType' => ['privates', 'Eccube\\Form\\Type\\NameType', 'getNameTypeService.php', true],
    'Eccube\\Form\\Type\\PhoneNumberType' => ['privates', 'Eccube\\Form\\Type\\PhoneNumberType', 'getPhoneNumberTypeService.php', true],
    'Eccube\\Form\\Type\\PostalType' => ['privates', 'Eccube\\Form\\Type\\PostalType', 'getPostalTypeService.php', true],
    'Eccube\\Form\\Type\\PriceType' => ['privates', 'Eccube\\Form\\Type\\PriceType', 'getPriceTypeService.php', true],
    'Eccube\\Form\\Type\\RepeatedEmailType' => ['privates', 'Eccube\\Form\\Type\\RepeatedEmailType', 'getRepeatedEmailTypeService.php', true],
    'Eccube\\Form\\Type\\RepeatedPasswordType' => ['privates', 'Eccube\\Form\\Type\\RepeatedPasswordType', 'getRepeatedPasswordTypeService.php', true],
    'Eccube\\Form\\Type\\SearchProductBlockType' => ['privates', 'Eccube\\Form\\Type\\SearchProductBlockType', 'getSearchProductBlockTypeService.php', true],
    'Eccube\\Form\\Type\\SearchProductType' => ['privates', 'Eccube\\Form\\Type\\SearchProductType', 'getSearchProductType2Service.php', true],
    'Eccube\\Form\\Type\\ShippingMultipleItemType' => ['privates', 'Eccube\\Form\\Type\\ShippingMultipleItemType', 'getShippingMultipleItemTypeService.php', true],
    'Eccube\\Form\\Type\\ShippingMultipleType' => ['privates', 'Eccube\\Form\\Type\\ShippingMultipleType', 'getShippingMultipleTypeService.php', true],
    'Eccube\\Form\\Type\\ShoppingMultipleType' => ['privates', 'Eccube\\Form\\Type\\ShoppingMultipleType', 'getShoppingMultipleTypeService.php', true],
    'Eccube\\Form\\Type\\Shopping\\CustomerAddressType' => ['privates', 'Eccube\\Form\\Type\\Shopping\\CustomerAddressType', 'getCustomerAddressType2Service.php', true],
    'Eccube\\Form\\Type\\Shopping\\OrderItemType' => ['privates', 'Eccube\\Form\\Type\\Shopping\\OrderItemType', 'getOrderItemType2Service.php', true],
    'Eccube\\Form\\Type\\Shopping\\OrderType' => ['privates', 'Eccube\\Form\\Type\\Shopping\\OrderType', 'getOrderType2Service.php', true],
    'Eccube\\Form\\Type\\Shopping\\ShippingType' => ['privates', 'Eccube\\Form\\Type\\Shopping\\ShippingType', 'getShippingType2Service.php', true],
    'Eccube\\Form\\Type\\ToggleSwitchType' => ['privates', 'Eccube\\Form\\Type\\ToggleSwitchType', 'getToggleSwitchTypeService.php', true],
    'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType' => ['privates', 'form.type.entity', 'getForm_Type_EntityService.php', true],
    'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType' => ['privates', 'form.type.choice', 'getForm_Type_ChoiceService.php', true],
    'Symfony\\Component\\Form\\Extension\\Core\\Type\\FileType' => ['services', 'form.type.file', 'getForm_Type_FileService.php', true],
    'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => ['privates', 'form.type.form', 'getForm_Type_FormService.php', true],
], [
    'Eccube\\Form\\Type\\AddCartType' => '?',
    'Eccube\\Form\\Type\\AddressType' => '?',
    'Eccube\\Form\\Type\\Admin\\AuthenticationType' => '?',
    'Eccube\\Form\\Type\\Admin\\AuthorityRoleType' => '?',
    'Eccube\\Form\\Type\\Admin\\BlockType' => '?',
    'Eccube\\Form\\Type\\Admin\\CalendarType' => '?',
    'Eccube\\Form\\Type\\Admin\\CategoryType' => '?',
    'Eccube\\Form\\Type\\Admin\\ChangePasswordType' => '?',
    'Eccube\\Form\\Type\\Admin\\ClassCategoryType' => '?',
    'Eccube\\Form\\Type\\Admin\\ClassNameType' => '?',
    'Eccube\\Form\\Type\\Admin\\CsvImportType' => '?',
    'Eccube\\Form\\Type\\Admin\\CustomerType' => '?',
    'Eccube\\Form\\Type\\Admin\\DeliveryFeeType' => '?',
    'Eccube\\Form\\Type\\Admin\\DeliveryTimeType' => '?',
    'Eccube\\Form\\Type\\Admin\\DeliveryType' => '?',
    'Eccube\\Form\\Type\\Admin\\LayoutType' => '?',
    'Eccube\\Form\\Type\\Admin\\LogType' => '?',
    'Eccube\\Form\\Type\\Admin\\LoginType' => '?',
    'Eccube\\Form\\Type\\Admin\\MailType' => '?',
    'Eccube\\Form\\Type\\Admin\\MainEditType' => '?',
    'Eccube\\Form\\Type\\Admin\\MasterdataDataType' => '?',
    'Eccube\\Form\\Type\\Admin\\MasterdataEditType' => '?',
    'Eccube\\Form\\Type\\Admin\\MasterdataType' => '?',
    'Eccube\\Form\\Type\\Admin\\MemberType' => '?',
    'Eccube\\Form\\Type\\Admin\\NewsType' => '?',
    'Eccube\\Form\\Type\\Admin\\OrderItemForShippingRegistrationType' => '?',
    'Eccube\\Form\\Type\\Admin\\OrderItemType' => '?',
    'Eccube\\Form\\Type\\Admin\\OrderMailType' => '?',
    'Eccube\\Form\\Type\\Admin\\OrderPdfType' => '?',
    'Eccube\\Form\\Type\\Admin\\OrderStatusSettingType' => '?',
    'Eccube\\Form\\Type\\Admin\\OrderType' => '?',
    'Eccube\\Form\\Type\\Admin\\PageType' => '?',
    'Eccube\\Form\\Type\\Admin\\PaymentRegisterType' => '?',
    'Eccube\\Form\\Type\\Admin\\PluginLocalInstallType' => '?',
    'Eccube\\Form\\Type\\Admin\\PluginManagementType' => '?',
    'Eccube\\Form\\Type\\Admin\\ProductClassEditType' => '?',
    'Eccube\\Form\\Type\\Admin\\ProductClassMatrixType' => '?',
    'Eccube\\Form\\Type\\Admin\\ProductClassType' => '?',
    'Eccube\\Form\\Type\\Admin\\ProductTag' => '?',
    'Eccube\\Form\\Type\\Admin\\ProductType' => '?',
    'Eccube\\Form\\Type\\Admin\\SearchCustomerType' => '?',
    'Eccube\\Form\\Type\\Admin\\SearchLoginHistoryType' => '?',
    'Eccube\\Form\\Type\\Admin\\SearchOrderType' => '?',
    'Eccube\\Form\\Type\\Admin\\SearchPluginApiType' => '?',
    'Eccube\\Form\\Type\\Admin\\SearchProductType' => '?',
    'Eccube\\Form\\Type\\Admin\\SecurityType' => '?',
    'Eccube\\Form\\Type\\Admin\\ShippingType' => '?',
    'Eccube\\Form\\Type\\Admin\\ShopMasterType' => '?',
    'Eccube\\Form\\Type\\Admin\\TagType' => '?',
    'Eccube\\Form\\Type\\Admin\\TaxRuleType' => '?',
    'Eccube\\Form\\Type\\Admin\\TemplateType' => '?',
    'Eccube\\Form\\Type\\Admin\\TwoFactorAuthType' => '?',
    'Eccube\\Form\\Type\\Front\\ContactType' => '?',
    'Eccube\\Form\\Type\\Front\\CustomerAddressType' => '?',
    'Eccube\\Form\\Type\\Front\\CustomerLoginType' => '?',
    'Eccube\\Form\\Type\\Front\\EntryType' => '?',
    'Eccube\\Form\\Type\\Front\\ForgotType' => '?',
    'Eccube\\Form\\Type\\Front\\NonMemberType' => '?',
    'Eccube\\Form\\Type\\Front\\PasswordResetType' => '?',
    'Eccube\\Form\\Type\\Front\\ShoppingShippingType' => '?',
    'Eccube\\Form\\Type\\Install\\Step1Type' => '?',
    'Eccube\\Form\\Type\\Install\\Step3Type' => '?',
    'Eccube\\Form\\Type\\Install\\Step4Type' => '?',
    'Eccube\\Form\\Type\\Install\\Step5Type' => '?',
    'Eccube\\Form\\Type\\KanaType' => '?',
    'Eccube\\Form\\Type\\MasterType' => '?',
    'Eccube\\Form\\Type\\Master\\CategoryType' => '?',
    'Eccube\\Form\\Type\\Master\\CsvType' => '?',
    'Eccube\\Form\\Type\\Master\\CustomerStatusType' => '?',
    'Eccube\\Form\\Type\\Master\\DeliveryDurationType' => '?',
    'Eccube\\Form\\Type\\Master\\DeviceTypeType' => '?',
    'Eccube\\Form\\Type\\Master\\JobType' => '?',
    'Eccube\\Form\\Type\\Master\\LoginHistoryStatusType' => '?',
    'Eccube\\Form\\Type\\Master\\MailTemplateType' => '?',
    'Eccube\\Form\\Type\\Master\\OrderStatusType' => '?',
    'Eccube\\Form\\Type\\Master\\PageMaxType' => '?',
    'Eccube\\Form\\Type\\Master\\PaymentType' => '?',
    'Eccube\\Form\\Type\\Master\\PrefType' => '?',
    'Eccube\\Form\\Type\\Master\\ProductListMaxType' => '?',
    'Eccube\\Form\\Type\\Master\\ProductListOrderByType' => '?',
    'Eccube\\Form\\Type\\Master\\ProductStatusType' => '?',
    'Eccube\\Form\\Type\\Master\\RoundingTypeType' => '?',
    'Eccube\\Form\\Type\\Master\\SaleTypeType' => '?',
    'Eccube\\Form\\Type\\Master\\SexType' => '?',
    'Eccube\\Form\\Type\\NameType' => '?',
    'Eccube\\Form\\Type\\PhoneNumberType' => '?',
    'Eccube\\Form\\Type\\PostalType' => '?',
    'Eccube\\Form\\Type\\PriceType' => '?',
    'Eccube\\Form\\Type\\RepeatedEmailType' => '?',
    'Eccube\\Form\\Type\\RepeatedPasswordType' => '?',
    'Eccube\\Form\\Type\\SearchProductBlockType' => '?',
    'Eccube\\Form\\Type\\SearchProductType' => '?',
    'Eccube\\Form\\Type\\ShippingMultipleItemType' => '?',
    'Eccube\\Form\\Type\\ShippingMultipleType' => '?',
    'Eccube\\Form\\Type\\ShoppingMultipleType' => '?',
    'Eccube\\Form\\Type\\Shopping\\CustomerAddressType' => '?',
    'Eccube\\Form\\Type\\Shopping\\OrderItemType' => '?',
    'Eccube\\Form\\Type\\Shopping\\OrderType' => '?',
    'Eccube\\Form\\Type\\Shopping\\ShippingType' => '?',
    'Eccube\\Form\\Type\\ToggleSwitchType' => '?',
    'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType' => '?',
    'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType' => '?',
    'Symfony\\Component\\Form\\Extension\\Core\\Type\\FileType' => '?',
    'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => '?',
]), ['Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => new RewindableGenerator(function () {
    yield 0 => ($this->privates['Eccube\\Form\\Extension\\DoctrineOrmExtension'] ?? $this->load('getDoctrineOrmExtensionService.php'));
    yield 1 => ($this->privates['Eccube\\Form\\Extension\\HelpTypeExtension'] ?? ($this->privates['Eccube\\Form\\Extension\\HelpTypeExtension'] = new \Eccube\Form\Extension\HelpTypeExtension()));
    yield 2 => ($this->privates['form.type_extension.form.transformation_failure_handling'] ?? $this->load('getForm_TypeExtension_Form_TransformationFailureHandlingService.php'));
    yield 3 => ($this->privates['form.type_extension.form.http_foundation'] ?? $this->load('getForm_TypeExtension_Form_HttpFoundationService.php'));
    yield 4 => ($this->privates['form.type_extension.form.validator'] ?? $this->load('getForm_TypeExtension_Form_ValidatorService.php'));
    yield 5 => ($this->privates['form.type_extension.upload.validator'] ?? $this->load('getForm_TypeExtension_Upload_ValidatorService.php'));
    yield 6 => ($this->privates['form.type_extension.csrf'] ?? $this->load('getForm_TypeExtension_CsrfService.php'));
}, 7), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\RepeatedType' => new RewindableGenerator(function () {
    yield 0 => ($this->privates['form.type_extension.repeated.validator'] ?? ($this->privates['form.type_extension.repeated.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension()));
}, 1), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\SubmitType' => new RewindableGenerator(function () {
    yield 0 => ($this->privates['form.type_extension.submit.validator'] ?? ($this->privates['form.type_extension.submit.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension()));
}, 1), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TextType' => new RewindableGenerator(function () {
    yield 0 => ($this->privates['exercise_html_purifier.form.text_type_extension'] ?? $this->load('getExerciseHtmlPurifier_Form_TextTypeExtensionService.php'));
    yield 1 => ($this->privates['Eccube\\Form\\Extension\\HTMLPurifierTextTypeExtension'] ?? $this->load('getHTMLPurifierTextTypeExtensionService.php'));
}, 2)], new RewindableGenerator(function () {
    yield 0 => ($this->privates['form.type_guesser.validator'] ?? $this->load('getForm_TypeGuesser_ValidatorService.php'));
    yield 1 => ($this->privates['form.type_guesser.doctrine'] ?? $this->load('getForm_TypeGuesser_DoctrineService.php'));
}, 2))], new \Symfony\Component\Form\ResolvedFormTypeFactory());
