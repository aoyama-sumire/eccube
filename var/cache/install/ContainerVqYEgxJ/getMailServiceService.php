<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'Eccube\Service\MailService' shared autowired service.

include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'MailService.php';

return $this->privates['Eccube\\Service\\MailService'] = new \Eccube\Service\MailService(($this->services['swiftmailer.mailer.default'] ?? $this->load('getSwiftmailer_Mailer_DefaultService.php')), ($this->privates['Eccube\\Repository\\MailTemplateRepository'] ?? $this->load('getMailTemplateRepositoryService.php')), ($this->privates['Eccube\\Repository\\MailHistoryRepository'] ?? $this->load('getMailHistoryRepositoryService.php')), ($this->privates['Eccube\\Repository\\BaseInfoRepository'] ?? $this->getBaseInfoRepositoryService()), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), ($this->services['twig'] ?? $this->getTwigService()), ($this->services['Eccube\\Common\\EccubeConfig'] ?? ($this->services['Eccube\\Common\\EccubeConfig'] = new \Eccube\Common\EccubeConfig($this))));
