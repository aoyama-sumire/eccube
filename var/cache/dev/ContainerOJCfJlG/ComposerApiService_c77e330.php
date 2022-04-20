<?php
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'Composer'.\DIRECTORY_SEPARATOR.'ComposerServiceInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'Composer'.\DIRECTORY_SEPARATOR.'ComposerApiService.php';

class ComposerApiService_c77e330 extends \Eccube\Service\Composer\ComposerApiService implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Eccube\Service\Composer\ComposerApiService|null wrapped object, if the proxy is initialized
     */
    private $valueHolderf4382 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer7fe19 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties808f2 = [
        
    ];

    public function execInfo($pluginName, $version)
    {
        $this->initializer7fe19 && ($this->initializer7fe19->__invoke($valueHolderf4382, $this, 'execInfo', array('pluginName' => $pluginName, 'version' => $version), $this->initializer7fe19) || 1) && $this->valueHolderf4382 = $valueHolderf4382;

        return $this->valueHolderf4382->execInfo($pluginName, $version);
    }

    public function execRequire($packageName, $output = null)
    {
        $this->initializer7fe19 && ($this->initializer7fe19->__invoke($valueHolderf4382, $this, 'execRequire', array('packageName' => $packageName, 'output' => $output), $this->initializer7fe19) || 1) && $this->valueHolderf4382 = $valueHolderf4382;

        return $this->valueHolderf4382->execRequire($packageName, $output);
    }

    public function execRemove($packageName, $output = null)
    {
        $this->initializer7fe19 && ($this->initializer7fe19->__invoke($valueHolderf4382, $this, 'execRemove', array('packageName' => $packageName, 'output' => $output), $this->initializer7fe19) || 1) && $this->valueHolderf4382 = $valueHolderf4382;

        return $this->valueHolderf4382->execRemove($packageName, $output);
    }

    public function execUpdate($dryRun, $output = null)
    {
        $this->initializer7fe19 && ($this->initializer7fe19->__invoke($valueHolderf4382, $this, 'execUpdate', array('dryRun' => $dryRun, 'output' => $output), $this->initializer7fe19) || 1) && $this->valueHolderf4382 = $valueHolderf4382;

        return $this->valueHolderf4382->execUpdate($dryRun, $output);
    }

    public function execInstall($dryRun, $output = null)
    {
        $this->initializer7fe19 && ($this->initializer7fe19->__invoke($valueHolderf4382, $this, 'execInstall', array('dryRun' => $dryRun, 'output' => $output), $this->initializer7fe19) || 1) && $this->valueHolderf4382 = $valueHolderf4382;

        return $this->valueHolderf4382->execInstall($dryRun, $output);
    }

    public function foreachRequires($packageName, $version, $callback, $typeFilter = null, $level = 0)
    {
        $this->initializer7fe19 && ($this->initializer7fe19->__invoke($valueHolderf4382, $this, 'foreachRequires', array('packageName' => $packageName, 'version' => $version, 'callback' => $callback, 'typeFilter' => $typeFilter, 'level' => $level), $this->initializer7fe19) || 1) && $this->valueHolderf4382 = $valueHolderf4382;

        return $this->valueHolderf4382->foreachRequires($packageName, $version, $callback, $typeFilter, $level);
    }

    public function execConfig($key, $value = null)
    {
        $this->initializer7fe19 && ($this->initializer7fe19->__invoke($valueHolderf4382, $this, 'execConfig', array('key' => $key, 'value' => $value), $this->initializer7fe19) || 1) && $this->valueHolderf4382 = $valueHolderf4382;

        return $this->valueHolderf4382->execConfig($key, $value);
    }

    public function getConfig()
    {
        $this->initializer7fe19 && ($this->initializer7fe19->__invoke($valueHolderf4382, $this, 'getConfig', array(), $this->initializer7fe19) || 1) && $this->valueHolderf4382 = $valueHolderf4382;

        return $this->valueHolderf4382->getConfig();
    }

    public function setWorkingDir($workingDir)
    {
        $this->initializer7fe19 && ($this->initializer7fe19->__invoke($valueHolderf4382, $this, 'setWorkingDir', array('workingDir' => $workingDir), $this->initializer7fe19) || 1) && $this->valueHolderf4382 = $valueHolderf4382;

        return $this->valueHolderf4382->setWorkingDir($workingDir);
    }

    public function runCommand($commands, $output = null, $init = true)
    {
        $this->initializer7fe19 && ($this->initializer7fe19->__invoke($valueHolderf4382, $this, 'runCommand', array('commands' => $commands, 'output' => $output, 'init' => $init), $this->initializer7fe19) || 1) && $this->valueHolderf4382 = $valueHolderf4382;

        return $this->valueHolderf4382->runCommand($commands, $output, $init);
    }

    public function configureRepository(\Eccube\Entity\BaseInfo $BaseInfo)
    {
        $this->initializer7fe19 && ($this->initializer7fe19->__invoke($valueHolderf4382, $this, 'configureRepository', array('BaseInfo' => $BaseInfo), $this->initializer7fe19) || 1) && $this->valueHolderf4382 = $valueHolderf4382;

        return $this->valueHolderf4382->configureRepository($BaseInfo);
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        unset($instance->eccubeConfig);

        \Closure::bind(function (\Eccube\Service\Composer\ComposerApiService $instance) {
            unset($instance->consoleApplication, $instance->workingDir, $instance->baseInfoRepository, $instance->schemaService, $instance->pluginContext);
        }, $instance, 'Eccube\\Service\\Composer\\ComposerApiService')->__invoke($instance);

        $instance->initializer7fe19 = $initializer;

        return $instance;
    }

    public function __construct(\Eccube\Common\EccubeConfig $eccubeConfig, \Eccube\Repository\BaseInfoRepository $baseInfoRepository, \Eccube\Service\SchemaService $schemaService, \Eccube\Service\PluginContext $pluginContext)
    {
        static $reflection;

        if (! $this->valueHolderf4382) {
            $reflection = $reflection ?? new \ReflectionClass('Eccube\\Service\\Composer\\ComposerApiService');
            $this->valueHolderf4382 = $reflection->newInstanceWithoutConstructor();
        unset($this->eccubeConfig);

        \Closure::bind(function (\Eccube\Service\Composer\ComposerApiService $instance) {
            unset($instance->consoleApplication, $instance->workingDir, $instance->baseInfoRepository, $instance->schemaService, $instance->pluginContext);
        }, $this, 'Eccube\\Service\\Composer\\ComposerApiService')->__invoke($this);

        }

        $this->valueHolderf4382->__construct($eccubeConfig, $baseInfoRepository, $schemaService, $pluginContext);
    }

    public function & __get($name)
    {
        $this->initializer7fe19 && ($this->initializer7fe19->__invoke($valueHolderf4382, $this, '__get', ['name' => $name], $this->initializer7fe19) || 1) && $this->valueHolderf4382 = $valueHolderf4382;

        if (isset(self::$publicProperties808f2[$name])) {
            return $this->valueHolderf4382->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\Composer\\ComposerApiService');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf4382;

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

        $targetObject = $this->valueHolderf4382;
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
        $this->initializer7fe19 && ($this->initializer7fe19->__invoke($valueHolderf4382, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer7fe19) || 1) && $this->valueHolderf4382 = $valueHolderf4382;

        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\Composer\\ComposerApiService');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf4382;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderf4382;
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
        $this->initializer7fe19 && ($this->initializer7fe19->__invoke($valueHolderf4382, $this, '__isset', array('name' => $name), $this->initializer7fe19) || 1) && $this->valueHolderf4382 = $valueHolderf4382;

        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\Composer\\ComposerApiService');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf4382;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderf4382;
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
        $this->initializer7fe19 && ($this->initializer7fe19->__invoke($valueHolderf4382, $this, '__unset', array('name' => $name), $this->initializer7fe19) || 1) && $this->valueHolderf4382 = $valueHolderf4382;

        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\Composer\\ComposerApiService');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf4382;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderf4382;
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
        $this->initializer7fe19 && ($this->initializer7fe19->__invoke($valueHolderf4382, $this, '__clone', array(), $this->initializer7fe19) || 1) && $this->valueHolderf4382 = $valueHolderf4382;

        $this->valueHolderf4382 = clone $this->valueHolderf4382;
    }

    public function __sleep()
    {
        $this->initializer7fe19 && ($this->initializer7fe19->__invoke($valueHolderf4382, $this, '__sleep', array(), $this->initializer7fe19) || 1) && $this->valueHolderf4382 = $valueHolderf4382;

        return array('valueHolderf4382');
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
        $this->initializer7fe19 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer7fe19;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer7fe19 && ($this->initializer7fe19->__invoke($valueHolderf4382, $this, 'initializeProxy', array(), $this->initializer7fe19) || 1) && $this->valueHolderf4382 = $valueHolderf4382;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderf4382;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderf4382;
    }


}
