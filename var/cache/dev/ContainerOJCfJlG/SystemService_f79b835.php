<?php
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'SystemService.php';

class SystemService_f79b835 extends \Eccube\Service\SystemService implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Eccube\Service\SystemService|null wrapped object, if the proxy is initialized
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

    public function getDbversion()
    {
        $this->initializer7fe19 && ($this->initializer7fe19->__invoke($valueHolderf4382, $this, 'getDbversion', array(), $this->initializer7fe19) || 1) && $this->valueHolderf4382 = $valueHolderf4382;

        return $this->valueHolderf4382->getDbversion();
    }

    public function canSetMemoryLimit($memory)
    {
        $this->initializer7fe19 && ($this->initializer7fe19->__invoke($valueHolderf4382, $this, 'canSetMemoryLimit', array('memory' => $memory), $this->initializer7fe19) || 1) && $this->valueHolderf4382 = $valueHolderf4382;

        return $this->valueHolderf4382->canSetMemoryLimit($memory);
    }

    public function getMemoryLimit()
    {
        $this->initializer7fe19 && ($this->initializer7fe19->__invoke($valueHolderf4382, $this, 'getMemoryLimit', array(), $this->initializer7fe19) || 1) && $this->valueHolderf4382 = $valueHolderf4382;

        return $this->valueHolderf4382->getMemoryLimit();
    }

    public function switchMaintenance($isEnable = false, $mode = 'auto_maintenance', bool $force = false)
    {
        $this->initializer7fe19 && ($this->initializer7fe19->__invoke($valueHolderf4382, $this, 'switchMaintenance', array('isEnable' => $isEnable, 'mode' => $mode, 'force' => $force), $this->initializer7fe19) || 1) && $this->valueHolderf4382 = $valueHolderf4382;

        return $this->valueHolderf4382->switchMaintenance($isEnable, $mode, $force);
    }

    public function getMaintenanceToken() : ?string
    {
        $this->initializer7fe19 && ($this->initializer7fe19->__invoke($valueHolderf4382, $this, 'getMaintenanceToken', array(), $this->initializer7fe19) || 1) && $this->valueHolderf4382 = $valueHolderf4382;

        return $this->valueHolderf4382->getMaintenanceToken();
    }

    public function disableMaintenanceEvent(\Symfony\Component\HttpKernel\Event\PostResponseEvent $event)
    {
        $this->initializer7fe19 && ($this->initializer7fe19->__invoke($valueHolderf4382, $this, 'disableMaintenanceEvent', array('event' => $event), $this->initializer7fe19) || 1) && $this->valueHolderf4382 = $valueHolderf4382;

        return $this->valueHolderf4382->disableMaintenanceEvent($event);
    }

    public function enableMaintenance($mode = 'auto_maintenance', bool $force = false) : void
    {
        $this->initializer7fe19 && ($this->initializer7fe19->__invoke($valueHolderf4382, $this, 'enableMaintenance', array('mode' => $mode, 'force' => $force), $this->initializer7fe19) || 1) && $this->valueHolderf4382 = $valueHolderf4382;

        $this->valueHolderf4382->enableMaintenance($mode, $force);
return;
    }

    public function disableMaintenance($mode = 'auto_maintenance')
    {
        $this->initializer7fe19 && ($this->initializer7fe19->__invoke($valueHolderf4382, $this, 'disableMaintenance', array('mode' => $mode), $this->initializer7fe19) || 1) && $this->valueHolderf4382 = $valueHolderf4382;

        return $this->valueHolderf4382->disableMaintenance($mode);
    }

    public function disableMaintenanceNow($mode = 'auto_maintenance', bool $force = false) : void
    {
        $this->initializer7fe19 && ($this->initializer7fe19->__invoke($valueHolderf4382, $this, 'disableMaintenanceNow', array('mode' => $mode, 'force' => $force), $this->initializer7fe19) || 1) && $this->valueHolderf4382 = $valueHolderf4382;

        $this->valueHolderf4382->disableMaintenanceNow($mode, $force);
return;
    }

    public function isMaintenanceMode()
    {
        $this->initializer7fe19 && ($this->initializer7fe19->__invoke($valueHolderf4382, $this, 'isMaintenanceMode', array(), $this->initializer7fe19) || 1) && $this->valueHolderf4382 = $valueHolderf4382;

        return $this->valueHolderf4382->isMaintenanceMode();
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

        unset($instance->entityManager, $instance->container);

        \Closure::bind(function (\Eccube\Service\SystemService $instance) {
            unset($instance->disableMaintenanceAfterResponse, $instance->maintenanceMode);
        }, $instance, 'Eccube\\Service\\SystemService')->__invoke($instance);

        $instance->initializer7fe19 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\ORM\EntityManagerInterface $entityManager, \Symfony\Component\DependencyInjection\ContainerInterface $container)
    {
        static $reflection;

        if (! $this->valueHolderf4382) {
            $reflection = $reflection ?? new \ReflectionClass('Eccube\\Service\\SystemService');
            $this->valueHolderf4382 = $reflection->newInstanceWithoutConstructor();
        unset($this->entityManager, $this->container);

        \Closure::bind(function (\Eccube\Service\SystemService $instance) {
            unset($instance->disableMaintenanceAfterResponse, $instance->maintenanceMode);
        }, $this, 'Eccube\\Service\\SystemService')->__invoke($this);

        }

        $this->valueHolderf4382->__construct($entityManager, $container);
    }

    public function & __get($name)
    {
        $this->initializer7fe19 && ($this->initializer7fe19->__invoke($valueHolderf4382, $this, '__get', ['name' => $name], $this->initializer7fe19) || 1) && $this->valueHolderf4382 = $valueHolderf4382;

        if (isset(self::$publicProperties808f2[$name])) {
            return $this->valueHolderf4382->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\SystemService');

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

        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\SystemService');

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

        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\SystemService');

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

        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\SystemService');

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
        unset($this->entityManager, $this->container);

        \Closure::bind(function (\Eccube\Service\SystemService $instance) {
            unset($instance->disableMaintenanceAfterResponse, $instance->maintenanceMode);
        }, $this, 'Eccube\\Service\\SystemService')->__invoke($this);
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
