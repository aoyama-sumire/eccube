<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'Eccube\Controller\Admin\Setting\System\SystemController' shared autowired service.

include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'Admin'.\DIRECTORY_SEPARATOR.'Setting'.\DIRECTORY_SEPARATOR.'System'.\DIRECTORY_SEPARATOR.'SystemController.php';

return $this->services['Eccube\\Controller\\Admin\\Setting\\System\\SystemController'] = new \Eccube\Controller\Admin\Setting\System\SystemController(($this->services['Eccube\\Service\\SystemService'] ?? $this->getSystemServiceService()));
