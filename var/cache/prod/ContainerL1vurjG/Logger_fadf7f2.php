<?php

include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'psr'.\DIRECTORY_SEPARATOR.'log'.\DIRECTORY_SEPARATOR.'Psr'.\DIRECTORY_SEPARATOR.'Log'.\DIRECTORY_SEPARATOR.'AbstractLogger.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Log'.\DIRECTORY_SEPARATOR.'Logger.php';
class Logger_fadf7f2 extends \Eccube\Log\Logger implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder8f9ea = null;
    private $initializera0977 = null;
    private static $publicPropertiesc4d83 = [
        
    ];
    public function log($level, $message, array $context = [])
    {
        $this->initializera0977 && ($this->initializera0977->__invoke($valueHolder8f9ea, $this, 'log', array('level' => $level, 'message' => $message, 'context' => $context), $this->initializera0977) || 1) && $this->valueHolder8f9ea = $valueHolder8f9ea;
        return $this->valueHolder8f9ea->log($level, $message, $context);
    }
    public function emergency($message, array $context = [])
    {
        $this->initializera0977 && ($this->initializera0977->__invoke($valueHolder8f9ea, $this, 'emergency', array('message' => $message, 'context' => $context), $this->initializera0977) || 1) && $this->valueHolder8f9ea = $valueHolder8f9ea;
        return $this->valueHolder8f9ea->emergency($message, $context);
    }
    public function alert($message, array $context = [])
    {
        $this->initializera0977 && ($this->initializera0977->__invoke($valueHolder8f9ea, $this, 'alert', array('message' => $message, 'context' => $context), $this->initializera0977) || 1) && $this->valueHolder8f9ea = $valueHolder8f9ea;
        return $this->valueHolder8f9ea->alert($message, $context);
    }
    public function critical($message, array $context = [])
    {
        $this->initializera0977 && ($this->initializera0977->__invoke($valueHolder8f9ea, $this, 'critical', array('message' => $message, 'context' => $context), $this->initializera0977) || 1) && $this->valueHolder8f9ea = $valueHolder8f9ea;
        return $this->valueHolder8f9ea->critical($message, $context);
    }
    public function error($message, array $context = [])
    {
        $this->initializera0977 && ($this->initializera0977->__invoke($valueHolder8f9ea, $this, 'error', array('message' => $message, 'context' => $context), $this->initializera0977) || 1) && $this->valueHolder8f9ea = $valueHolder8f9ea;
        return $this->valueHolder8f9ea->error($message, $context);
    }
    public function warning($message, array $context = [])
    {
        $this->initializera0977 && ($this->initializera0977->__invoke($valueHolder8f9ea, $this, 'warning', array('message' => $message, 'context' => $context), $this->initializera0977) || 1) && $this->valueHolder8f9ea = $valueHolder8f9ea;
        return $this->valueHolder8f9ea->warning($message, $context);
    }
    public function notice($message, array $context = [])
    {
        $this->initializera0977 && ($this->initializera0977->__invoke($valueHolder8f9ea, $this, 'notice', array('message' => $message, 'context' => $context), $this->initializera0977) || 1) && $this->valueHolder8f9ea = $valueHolder8f9ea;
        return $this->valueHolder8f9ea->notice($message, $context);
    }
    public function info($message, array $context = [])
    {
        $this->initializera0977 && ($this->initializera0977->__invoke($valueHolder8f9ea, $this, 'info', array('message' => $message, 'context' => $context), $this->initializera0977) || 1) && $this->valueHolder8f9ea = $valueHolder8f9ea;
        return $this->valueHolder8f9ea->info($message, $context);
    }
    public function debug($message, array $context = [])
    {
        $this->initializera0977 && ($this->initializera0977->__invoke($valueHolder8f9ea, $this, 'debug', array('message' => $message, 'context' => $context), $this->initializera0977) || 1) && $this->valueHolder8f9ea = $valueHolder8f9ea;
        return $this->valueHolder8f9ea->debug($message, $context);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        unset($instance->context, $instance->logger, $instance->frontLogger, $instance->adminLogger);
        $instance->initializera0977 = $initializer;
        return $instance;
    }
    public function __construct(\Eccube\Request\Context $context, \Psr\Log\LoggerInterface $logger, \Psr\Log\LoggerInterface $frontLogger, \Psr\Log\LoggerInterface $adminLogger)
    {
        static $reflection;
        if (! $this->valueHolder8f9ea) {
            $reflection = $reflection ?? new \ReflectionClass('Eccube\\Log\\Logger');
            $this->valueHolder8f9ea = $reflection->newInstanceWithoutConstructor();
        unset($this->context, $this->logger, $this->frontLogger, $this->adminLogger);
        }
        $this->valueHolder8f9ea->__construct($context, $logger, $frontLogger, $adminLogger);
    }
    public function & __get($name)
    {
        $this->initializera0977 && ($this->initializera0977->__invoke($valueHolder8f9ea, $this, '__get', ['name' => $name], $this->initializera0977) || 1) && $this->valueHolder8f9ea = $valueHolder8f9ea;
        if (isset(self::$publicPropertiesc4d83[$name])) {
            return $this->valueHolder8f9ea->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Eccube\\Log\\Logger');
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
        $realInstanceReflection = new \ReflectionClass('Eccube\\Log\\Logger');
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
        $realInstanceReflection = new \ReflectionClass('Eccube\\Log\\Logger');
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
        $realInstanceReflection = new \ReflectionClass('Eccube\\Log\\Logger');
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
        unset($this->context, $this->logger, $this->frontLogger, $this->adminLogger);
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
