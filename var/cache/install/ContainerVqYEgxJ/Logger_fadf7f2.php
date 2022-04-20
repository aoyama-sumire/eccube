<?php

include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'psr'.\DIRECTORY_SEPARATOR.'log'.\DIRECTORY_SEPARATOR.'Psr'.\DIRECTORY_SEPARATOR.'Log'.\DIRECTORY_SEPARATOR.'AbstractLogger.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Log'.\DIRECTORY_SEPARATOR.'Logger.php';
class Logger_fadf7f2 extends \Eccube\Log\Logger implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolderf4382 = null;
    private $initializer7fe19 = null;
    private static $publicProperties808f2 = [
        
    ];
    public function log($level, $message, array $context = [])
    {
        $this->initializer7fe19 && ($this->initializer7fe19->__invoke($valueHolderf4382, $this, 'log', array('level' => $level, 'message' => $message, 'context' => $context), $this->initializer7fe19) || 1) && $this->valueHolderf4382 = $valueHolderf4382;
        return $this->valueHolderf4382->log($level, $message, $context);
    }
    public function emergency($message, array $context = [])
    {
        $this->initializer7fe19 && ($this->initializer7fe19->__invoke($valueHolderf4382, $this, 'emergency', array('message' => $message, 'context' => $context), $this->initializer7fe19) || 1) && $this->valueHolderf4382 = $valueHolderf4382;
        return $this->valueHolderf4382->emergency($message, $context);
    }
    public function alert($message, array $context = [])
    {
        $this->initializer7fe19 && ($this->initializer7fe19->__invoke($valueHolderf4382, $this, 'alert', array('message' => $message, 'context' => $context), $this->initializer7fe19) || 1) && $this->valueHolderf4382 = $valueHolderf4382;
        return $this->valueHolderf4382->alert($message, $context);
    }
    public function critical($message, array $context = [])
    {
        $this->initializer7fe19 && ($this->initializer7fe19->__invoke($valueHolderf4382, $this, 'critical', array('message' => $message, 'context' => $context), $this->initializer7fe19) || 1) && $this->valueHolderf4382 = $valueHolderf4382;
        return $this->valueHolderf4382->critical($message, $context);
    }
    public function error($message, array $context = [])
    {
        $this->initializer7fe19 && ($this->initializer7fe19->__invoke($valueHolderf4382, $this, 'error', array('message' => $message, 'context' => $context), $this->initializer7fe19) || 1) && $this->valueHolderf4382 = $valueHolderf4382;
        return $this->valueHolderf4382->error($message, $context);
    }
    public function warning($message, array $context = [])
    {
        $this->initializer7fe19 && ($this->initializer7fe19->__invoke($valueHolderf4382, $this, 'warning', array('message' => $message, 'context' => $context), $this->initializer7fe19) || 1) && $this->valueHolderf4382 = $valueHolderf4382;
        return $this->valueHolderf4382->warning($message, $context);
    }
    public function notice($message, array $context = [])
    {
        $this->initializer7fe19 && ($this->initializer7fe19->__invoke($valueHolderf4382, $this, 'notice', array('message' => $message, 'context' => $context), $this->initializer7fe19) || 1) && $this->valueHolderf4382 = $valueHolderf4382;
        return $this->valueHolderf4382->notice($message, $context);
    }
    public function info($message, array $context = [])
    {
        $this->initializer7fe19 && ($this->initializer7fe19->__invoke($valueHolderf4382, $this, 'info', array('message' => $message, 'context' => $context), $this->initializer7fe19) || 1) && $this->valueHolderf4382 = $valueHolderf4382;
        return $this->valueHolderf4382->info($message, $context);
    }
    public function debug($message, array $context = [])
    {
        $this->initializer7fe19 && ($this->initializer7fe19->__invoke($valueHolderf4382, $this, 'debug', array('message' => $message, 'context' => $context), $this->initializer7fe19) || 1) && $this->valueHolderf4382 = $valueHolderf4382;
        return $this->valueHolderf4382->debug($message, $context);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        unset($instance->context, $instance->logger, $instance->frontLogger, $instance->adminLogger);
        $instance->initializer7fe19 = $initializer;
        return $instance;
    }
    public function __construct(\Eccube\Request\Context $context, \Psr\Log\LoggerInterface $logger, \Psr\Log\LoggerInterface $frontLogger, \Psr\Log\LoggerInterface $adminLogger)
    {
        static $reflection;
        if (! $this->valueHolderf4382) {
            $reflection = $reflection ?? new \ReflectionClass('Eccube\\Log\\Logger');
            $this->valueHolderf4382 = $reflection->newInstanceWithoutConstructor();
        unset($this->context, $this->logger, $this->frontLogger, $this->adminLogger);
        }
        $this->valueHolderf4382->__construct($context, $logger, $frontLogger, $adminLogger);
    }
    public function & __get($name)
    {
        $this->initializer7fe19 && ($this->initializer7fe19->__invoke($valueHolderf4382, $this, '__get', ['name' => $name], $this->initializer7fe19) || 1) && $this->valueHolderf4382 = $valueHolderf4382;
        if (isset(self::$publicProperties808f2[$name])) {
            return $this->valueHolderf4382->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Eccube\\Log\\Logger');
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
        $realInstanceReflection = new \ReflectionClass('Eccube\\Log\\Logger');
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
        $realInstanceReflection = new \ReflectionClass('Eccube\\Log\\Logger');
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
        $realInstanceReflection = new \ReflectionClass('Eccube\\Log\\Logger');
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
        unset($this->context, $this->logger, $this->frontLogger, $this->adminLogger);
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
