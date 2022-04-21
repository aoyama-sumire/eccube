<?php

include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'Composer'.\DIRECTORY_SEPARATOR.'ComposerServiceInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'Composer'.\DIRECTORY_SEPARATOR.'ComposerApiService.php';
class ComposerApiService_c77e330 extends \Eccube\Service\Composer\ComposerApiService implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder8f9ea = null;
    private $initializera0977 = null;
    private static $publicPropertiesc4d83 = [
        
    ];
    public function execInfo($pluginName, $version)
    {
        $this->initializera0977 && ($this->initializera0977->__invoke($valueHolder8f9ea, $this, 'execInfo', array('pluginName' => $pluginName, 'version' => $version), $this->initializera0977) || 1) && $this->valueHolder8f9ea = $valueHolder8f9ea;
        return $this->valueHolder8f9ea->execInfo($pluginName, $version);
    }
    public function execRequire($packageName, $output = null)
    {
        $this->initializera0977 && ($this->initializera0977->__invoke($valueHolder8f9ea, $this, 'execRequire', array('packageName' => $packageName, 'output' => $output), $this->initializera0977) || 1) && $this->valueHolder8f9ea = $valueHolder8f9ea;
        return $this->valueHolder8f9ea->execRequire($packageName, $output);
    }
    public function execRemove($packageName, $output = null)
    {
        $this->initializera0977 && ($this->initializera0977->__invoke($valueHolder8f9ea, $this, 'execRemove', array('packageName' => $packageName, 'output' => $output), $this->initializera0977) || 1) && $this->valueHolder8f9ea = $valueHolder8f9ea;
        return $this->valueHolder8f9ea->execRemove($packageName, $output);
    }
    public function execUpdate($dryRun, $output = null)
    {
        $this->initializera0977 && ($this->initializera0977->__invoke($valueHolder8f9ea, $this, 'execUpdate', array('dryRun' => $dryRun, 'output' => $output), $this->initializera0977) || 1) && $this->valueHolder8f9ea = $valueHolder8f9ea;
        return $this->valueHolder8f9ea->execUpdate($dryRun, $output);
    }
    public function execInstall($dryRun, $output = null)
    {
        $this->initializera0977 && ($this->initializera0977->__invoke($valueHolder8f9ea, $this, 'execInstall', array('dryRun' => $dryRun, 'output' => $output), $this->initializera0977) || 1) && $this->valueHolder8f9ea = $valueHolder8f9ea;
        return $this->valueHolder8f9ea->execInstall($dryRun, $output);
    }
    public function foreachRequires($packageName, $version, $callback, $typeFilter = null, $level = 0)
    {
        $this->initializera0977 && ($this->initializera0977->__invoke($valueHolder8f9ea, $this, 'foreachRequires', array('packageName' => $packageName, 'version' => $version, 'callback' => $callback, 'typeFilter' => $typeFilter, 'level' => $level), $this->initializera0977) || 1) && $this->valueHolder8f9ea = $valueHolder8f9ea;
        return $this->valueHolder8f9ea->foreachRequires($packageName, $version, $callback, $typeFilter, $level);
    }
    public function execConfig($key, $value = null)
    {
        $this->initializera0977 && ($this->initializera0977->__invoke($valueHolder8f9ea, $this, 'execConfig', array('key' => $key, 'value' => $value), $this->initializera0977) || 1) && $this->valueHolder8f9ea = $valueHolder8f9ea;
        return $this->valueHolder8f9ea->execConfig($key, $value);
    }
    public function getConfig()
    {
        $this->initializera0977 && ($this->initializera0977->__invoke($valueHolder8f9ea, $this, 'getConfig', array(), $this->initializera0977) || 1) && $this->valueHolder8f9ea = $valueHolder8f9ea;
        return $this->valueHolder8f9ea->getConfig();
    }
    public function setWorkingDir($workingDir)
    {
        $this->initializera0977 && ($this->initializera0977->__invoke($valueHolder8f9ea, $this, 'setWorkingDir', array('workingDir' => $workingDir), $this->initializera0977) || 1) && $this->valueHolder8f9ea = $valueHolder8f9ea;
        return $this->valueHolder8f9ea->setWorkingDir($workingDir);
    }
    public function runCommand($commands, $output = null, $init = true)
    {
        $this->initializera0977 && ($this->initializera0977->__invoke($valueHolder8f9ea, $this, 'runCommand', array('commands' => $commands, 'output' => $output, 'init' => $init), $this->initializera0977) || 1) && $this->valueHolder8f9ea = $valueHolder8f9ea;
        return $this->valueHolder8f9ea->runCommand($commands, $output, $init);
    }
    public function configureRepository(\Eccube\Entity\BaseInfo $BaseInfo)
    {
        $this->initializera0977 && ($this->initializera0977->__invoke($valueHolder8f9ea, $this, 'configureRepository', array('BaseInfo' => $BaseInfo), $this->initializera0977) || 1) && $this->valueHolder8f9ea = $valueHolder8f9ea;
        return $this->valueHolder8f9ea->configureRepository($BaseInfo);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        unset($instance->eccubeConfig);
        \Closure::bind(function (\Eccube\Service\Composer\ComposerApiService $instance) {
            unset($instance->consoleApplication, $instance->workingDir, $instance->baseInfoRepository, $instance->schemaService, $instance->pluginContext);
        }, $instance, 'Eccube\\Service\\Composer\\ComposerApiService')->__invoke($instance);
        $instance->initializera0977 = $initializer;
        return $instance;
    }
    public function __construct(\Eccube\Common\EccubeConfig $eccubeConfig, \Eccube\Repository\BaseInfoRepository $baseInfoRepository, \Eccube\Service\SchemaService $schemaService, \Eccube\Service\PluginContext $pluginContext)
    {
        static $reflection;
        if (! $this->valueHolder8f9ea) {
            $reflection = $reflection ?? new \ReflectionClass('Eccube\\Service\\Composer\\ComposerApiService');
            $this->valueHolder8f9ea = $reflection->newInstanceWithoutConstructor();
        unset($this->eccubeConfig);
        \Closure::bind(function (\Eccube\Service\Composer\ComposerApiService $instance) {
            unset($instance->consoleApplication, $instance->workingDir, $instance->baseInfoRepository, $instance->schemaService, $instance->pluginContext);
        }, $this, 'Eccube\\Service\\Composer\\ComposerApiService')->__invoke($this);
        }
        $this->valueHolder8f9ea->__construct($eccubeConfig, $baseInfoRepository, $schemaService, $pluginContext);
    }
    public function & __get($name)
    {
        $this->initializera0977 && ($this->initializera0977->__invoke($valueHolder8f9ea, $this, '__get', ['name' => $name], $this->initializera0977) || 1) && $this->valueHolder8f9ea = $valueHolder8f9ea;
        if (isset(self::$publicPropertiesc4d83[$name])) {
            return $this->valueHolder8f9ea->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\Composer\\ComposerApiService');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8f9ea;
            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder8f9ea;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __set($name, $value)
    {
        $this->initializera0977 && ($this->initializera0977->__invoke($valueHolder8f9ea, $this, '__set', array('name' => $name, 'value' => $value), $this->initializera0977) || 1) && $this->valueHolder8f9ea = $valueHolder8f9ea;
        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\Composer\\ComposerApiService');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8f9ea;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder8f9ea;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __isset($name)
    {
        $this->initializera0977 && ($this->initializera0977->__invoke($valueHolder8f9ea, $this, '__isset', array('name' => $name), $this->initializera0977) || 1) && $this->valueHolder8f9ea = $valueHolder8f9ea;
        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\Composer\\ComposerApiService');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8f9ea;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder8f9ea;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();
        return $returnValue;
    }
    public function __unset($name)
    {
        $this->initializera0977 && ($this->initializera0977->__invoke($valueHolder8f9ea, $this, '__unset', array('name' => $name), $this->initializera0977) || 1) && $this->valueHolder8f9ea = $valueHolder8f9ea;
        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\Composer\\ComposerApiService');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8f9ea;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder8f9ea;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }
    public function __clone()
    {
        $this->initializera0977 && ($this->initializera0977->__invoke($valueHolder8f9ea, $this, '__clone', array(), $this->initializera0977) || 1) && $this->valueHolder8f9ea = $valueHolder8f9ea;
        $this->valueHolder8f9ea = clone $this->valueHolder8f9ea;
    }
    public function __sleep()
    {
        $this->initializera0977 && ($this->initializera0977->__invoke($valueHolder8f9ea, $this, '__sleep', array(), $this->initializera0977) || 1) && $this->valueHolder8f9ea = $valueHolder8f9ea;
        return array('valueHolder8f9ea');
    }
    public function __wakeup()
    {
        unset($this->eccubeConfig);
        \Closure::bind(function (\Eccube\Service\Composer\ComposerApiService $instance) {
            unset($instance->consoleApplication, $instance->workingDir, $instance->baseInfoRepository, $instance->schemaService, $instance->pluginContext);
        }, $this, 'Eccube\\Service\\Composer\\ComposerApiService')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializera0977 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializera0977;
    }
    public function initializeProxy() : bool
    {
        return $this->initializera0977 && ($this->initializera0977->__invoke($valueHolder8f9ea, $this, 'initializeProxy', array(), $this->initializera0977) || 1) && $this->valueHolder8f9ea = $valueHolder8f9ea;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder8f9ea;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder8f9ea;
    }
}
