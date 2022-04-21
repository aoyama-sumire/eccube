<?php

include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'SystemService.php';
class SystemService_f79b835 extends \Eccube\Service\SystemService implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder8f9ea = null;
    private $initializera0977 = null;
    private static $publicPropertiesc4d83 = [
        
    ];
    public function getDbversion()
    {
        $this->initializera0977 && ($this->initializera0977->__invoke($valueHolder8f9ea, $this, 'getDbversion', array(), $this->initializera0977) || 1) && $this->valueHolder8f9ea = $valueHolder8f9ea;
        return $this->valueHolder8f9ea->getDbversion();
    }
    public function canSetMemoryLimit($memory)
    {
        $this->initializera0977 && ($this->initializera0977->__invoke($valueHolder8f9ea, $this, 'canSetMemoryLimit', array('memory' => $memory), $this->initializera0977) || 1) && $this->valueHolder8f9ea = $valueHolder8f9ea;
        return $this->valueHolder8f9ea->canSetMemoryLimit($memory);
    }
    public function getMemoryLimit()
    {
        $this->initializera0977 && ($this->initializera0977->__invoke($valueHolder8f9ea, $this, 'getMemoryLimit', array(), $this->initializera0977) || 1) && $this->valueHolder8f9ea = $valueHolder8f9ea;
        return $this->valueHolder8f9ea->getMemoryLimit();
    }
    public function switchMaintenance($isEnable = false, $mode = 'auto_maintenance', bool $force = false)
    {
        $this->initializera0977 && ($this->initializera0977->__invoke($valueHolder8f9ea, $this, 'switchMaintenance', array('isEnable' => $isEnable, 'mode' => $mode, 'force' => $force), $this->initializera0977) || 1) && $this->valueHolder8f9ea = $valueHolder8f9ea;
        return $this->valueHolder8f9ea->switchMaintenance($isEnable, $mode, $force);
    }
    public function getMaintenanceToken() : ?string
    {
        $this->initializera0977 && ($this->initializera0977->__invoke($valueHolder8f9ea, $this, 'getMaintenanceToken', array(), $this->initializera0977) || 1) && $this->valueHolder8f9ea = $valueHolder8f9ea;
        return $this->valueHolder8f9ea->getMaintenanceToken();
    }
    public function disableMaintenanceEvent(\Symfony\Component\HttpKernel\Event\PostResponseEvent $event)
    {
        $this->initializera0977 && ($this->initializera0977->__invoke($valueHolder8f9ea, $this, 'disableMaintenanceEvent', array('event' => $event), $this->initializera0977) || 1) && $this->valueHolder8f9ea = $valueHolder8f9ea;
        return $this->valueHolder8f9ea->disableMaintenanceEvent($event);
    }
    public function enableMaintenance($mode = 'auto_maintenance', bool $force = false) : void
    {
        $this->initializera0977 && ($this->initializera0977->__invoke($valueHolder8f9ea, $this, 'enableMaintenance', array('mode' => $mode, 'force' => $force), $this->initializera0977) || 1) && $this->valueHolder8f9ea = $valueHolder8f9ea;
        $this->valueHolder8f9ea->enableMaintenance($mode, $force);
return;
    }
    public function disableMaintenance($mode = 'auto_maintenance')
    {
        $this->initializera0977 && ($this->initializera0977->__invoke($valueHolder8f9ea, $this, 'disableMaintenance', array('mode' => $mode), $this->initializera0977) || 1) && $this->valueHolder8f9ea = $valueHolder8f9ea;
        return $this->valueHolder8f9ea->disableMaintenance($mode);
    }
    public function disableMaintenanceNow($mode = 'auto_maintenance', bool $force = false) : void
    {
        $this->initializera0977 && ($this->initializera0977->__invoke($valueHolder8f9ea, $this, 'disableMaintenanceNow', array('mode' => $mode, 'force' => $force), $this->initializera0977) || 1) && $this->valueHolder8f9ea = $valueHolder8f9ea;
        $this->valueHolder8f9ea->disableMaintenanceNow($mode, $force);
return;
    }
    public function isMaintenanceMode()
    {
        $this->initializera0977 && ($this->initializera0977->__invoke($valueHolder8f9ea, $this, 'isMaintenanceMode', array(), $this->initializera0977) || 1) && $this->valueHolder8f9ea = $valueHolder8f9ea;
        return $this->valueHolder8f9ea->isMaintenanceMode();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        unset($instance->entityManager, $instance->container);
        \Closure::bind(function (\Eccube\Service\SystemService $instance) {
            unset($instance->disableMaintenanceAfterResponse, $instance->maintenanceMode);
        }, $instance, 'Eccube\\Service\\SystemService')->__invoke($instance);
        $instance->initializera0977 = $initializer;
        return $instance;
    }
    public function __construct(\Doctrine\ORM\EntityManagerInterface $entityManager, \Symfony\Component\DependencyInjection\ContainerInterface $container)
    {
        static $reflection;
        if (! $this->valueHolder8f9ea) {
            $reflection = $reflection ?? new \ReflectionClass('Eccube\\Service\\SystemService');
            $this->valueHolder8f9ea = $reflection->newInstanceWithoutConstructor();
        unset($this->entityManager, $this->container);
        \Closure::bind(function (\Eccube\Service\SystemService $instance) {
            unset($instance->disableMaintenanceAfterResponse, $instance->maintenanceMode);
        }, $this, 'Eccube\\Service\\SystemService')->__invoke($this);
        }
        $this->valueHolder8f9ea->__construct($entityManager, $container);
    }
    public function & __get($name)
    {
        $this->initializera0977 && ($this->initializera0977->__invoke($valueHolder8f9ea, $this, '__get', ['name' => $name], $this->initializera0977) || 1) && $this->valueHolder8f9ea = $valueHolder8f9ea;
        if (isset(self::$publicPropertiesc4d83[$name])) {
            return $this->valueHolder8f9ea->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\SystemService');
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
        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\SystemService');
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
        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\SystemService');
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
        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\SystemService');
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
        unset($this->entityManager, $this->container);
        \Closure::bind(function (\Eccube\Service\SystemService $instance) {
            unset($instance->disableMaintenanceAfterResponse, $instance->maintenanceMode);
        }, $this, 'Eccube\\Service\\SystemService')->__invoke($this);
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
