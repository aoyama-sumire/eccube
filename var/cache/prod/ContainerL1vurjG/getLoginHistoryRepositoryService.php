<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'Eccube\Repository\LoginHistoryRepository' shared autowired service.

include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Repository'.\DIRECTORY_SEPARATOR.'LoginHistoryRepository.php';

return $this->privates['Eccube\\Repository\\LoginHistoryRepository'] = new \Eccube\Repository\LoginHistoryRepository(($this->services['doctrine'] ?? $this->getDoctrineService()), ($this->privates['Eccube\\Doctrine\\Query\\Queries'] ?? ($this->privates['Eccube\\Doctrine\\Query\\Queries'] = new \Eccube\Doctrine\Query\Queries())));
