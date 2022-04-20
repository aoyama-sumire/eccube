<?php

include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';
class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolderf4382 = null;
    private $initializer7fe19 = null;
    private static $publicProperties808f2 = [
        
    ];
    public function getConnection()
    {
        $this->initializer7fe19 && ($this->initializer7fe19->__invoke($valueHolderf4382, $this, 'getConnection', array(), $this->initializer7fe19) || 1) && $this->valueHolderf4382 = $valueHolderf4382;
        return $this->valueHolderf4382->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializer7fe19 && ($this->initializer7fe19->__invoke($valueHolderf4382, $this, 'getMetadataFactory', array(), $this->initializer7fe19) || 1) && $this->valueHolderf4382 = $valueHolderf4382;
        return $this->valueHolderf4382->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializer7fe19 && ($this->initializer7fe19->__invoke($valueHolderf4382, $this, 'getExpressionBuilder', array(), $this->initializer7fe19) || 1) && $this->valueHolderf4382 = $valueHolderf4382;
        return $this->valueHolderf4382->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializer7fe19 && ($this->initializer7fe19->__invoke($valueHolderf4382, $this, 'beginTransaction', array(), $this->initializer7fe19) || 1) && $this->valueHolderf4382 = $valueHolderf4382;
        return $this->valueHolderf4382->beginTransaction();
    }
    public function getCache()
    {
        $this->initializer7fe19 && ($this->initializer7fe19->__invoke($valueHolderf4382, $this, 'getCache', array(), $this->initializer7fe19) || 1) && $this->valueHolderf4382 = $valueHolderf4382;
        return $this->valueHolderf4382->getCache();
    }
    public function transactional($func)
    {
        $this->initializer7fe19 && ($this->initializer7fe19->__invoke($valueHolderf4382, $this, 'transactional', array('func' => $func), $this->initializer7fe19) || 1) && $this->valueHolderf4382 = $valueHolderf4382;
        return $this->valueHolderf4382->transactional($func);
    }
    public function commit()
    {
        $this->initializer7fe19 && ($this->initializer7fe19->__invoke($valueHolderf4382, $this, 'commit', array(), $this->initializer7fe19) || 1) && $this->valueHolderf4382 = $valueHolderf4382;
        return $this->valueHolderf4382->commit();
    }
    public function rollback()
    {
        $this->initializer7fe19 && ($this->initializer7fe19->__invoke($valueHolderf4382, $this, 'rollback', array(), $this->initializer7fe19) || 1) && $this->valueHolderf4382 = $valueHolderf4382;
        return $this->valueHolderf4382->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializer7fe19 && ($this->initializer7fe19->__invoke($valueHolderf4382, $this, 'getClassMetadata', array('className' => $className), $this->initializer7fe19) || 1) && $this->valueHolderf4382 = $valueHolderf4382;
        return $this->valueHolderf4382->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializer7fe19 && ($this->initializer7fe19->__invoke($valueHolderf4382, $this, 'createQuery', array('dql' => $dql), $this->initializer7fe19) || 1) && $this->valueHolderf4382 = $valueHolderf4382;
        return $this->valueHolderf4382->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializer7fe19 && ($this->initializer7fe19->__invoke($valueHolderf4382, $this, 'createNamedQuery', array('name' => $name), $this->initializer7fe19) || 1) && $this->valueHolderf4382 = $valueHolderf4382;
        return $this->valueHolderf4382->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer7fe19 && ($this->initializer7fe19->__invoke($valueHolderf4382, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer7fe19) || 1) && $this->valueHolderf4382 = $valueHolderf4382;
        return $this->valueHolderf4382->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializer7fe19 && ($this->initializer7fe19->__invoke($valueHolderf4382, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer7fe19) || 1) && $this->valueHolderf4382 = $valueHolderf4382;
        return $this->valueHolderf4382->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializer7fe19 && ($this->initializer7fe19->__invoke($valueHolderf4382, $this, 'createQueryBuilder', array(), $this->initializer7fe19) || 1) && $this->valueHolderf4382 = $valueHolderf4382;
        return $this->valueHolderf4382->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializer7fe19 && ($this->initializer7fe19->__invoke($valueHolderf4382, $this, 'flush', array('entity' => $entity), $this->initializer7fe19) || 1) && $this->valueHolderf4382 = $valueHolderf4382;
        return $this->valueHolderf4382->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer7fe19 && ($this->initializer7fe19->__invoke($valueHolderf4382, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer7fe19) || 1) && $this->valueHolderf4382 = $valueHolderf4382;
        return $this->valueHolderf4382->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializer7fe19 && ($this->initializer7fe19->__invoke($valueHolderf4382, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer7fe19) || 1) && $this->valueHolderf4382 = $valueHolderf4382;
        return $this->valueHolderf4382->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer7fe19 && ($this->initializer7fe19->__invoke($valueHolderf4382, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer7fe19) || 1) && $this->valueHolderf4382 = $valueHolderf4382;
        return $this->valueHolderf4382->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializer7fe19 && ($this->initializer7fe19->__invoke($valueHolderf4382, $this, 'clear', array('entityName' => $entityName), $this->initializer7fe19) || 1) && $this->valueHolderf4382 = $valueHolderf4382;
        return $this->valueHolderf4382->clear($entityName);
    }
    public function close()
    {
        $this->initializer7fe19 && ($this->initializer7fe19->__invoke($valueHolderf4382, $this, 'close', array(), $this->initializer7fe19) || 1) && $this->valueHolderf4382 = $valueHolderf4382;
        return $this->valueHolderf4382->close();
    }
    public function persist($entity)
    {
        $this->initializer7fe19 && ($this->initializer7fe19->__invoke($valueHolderf4382, $this, 'persist', array('entity' => $entity), $this->initializer7fe19) || 1) && $this->valueHolderf4382 = $valueHolderf4382;
        return $this->valueHolderf4382->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializer7fe19 && ($this->initializer7fe19->__invoke($valueHolderf4382, $this, 'remove', array('entity' => $entity), $this->initializer7fe19) || 1) && $this->valueHolderf4382 = $valueHolderf4382;
        return $this->valueHolderf4382->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializer7fe19 && ($this->initializer7fe19->__invoke($valueHolderf4382, $this, 'refresh', array('entity' => $entity), $this->initializer7fe19) || 1) && $this->valueHolderf4382 = $valueHolderf4382;
        return $this->valueHolderf4382->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializer7fe19 && ($this->initializer7fe19->__invoke($valueHolderf4382, $this, 'detach', array('entity' => $entity), $this->initializer7fe19) || 1) && $this->valueHolderf4382 = $valueHolderf4382;
        return $this->valueHolderf4382->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializer7fe19 && ($this->initializer7fe19->__invoke($valueHolderf4382, $this, 'merge', array('entity' => $entity), $this->initializer7fe19) || 1) && $this->valueHolderf4382 = $valueHolderf4382;
        return $this->valueHolderf4382->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializer7fe19 && ($this->initializer7fe19->__invoke($valueHolderf4382, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer7fe19) || 1) && $this->valueHolderf4382 = $valueHolderf4382;
        return $this->valueHolderf4382->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer7fe19 && ($this->initializer7fe19->__invoke($valueHolderf4382, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer7fe19) || 1) && $this->valueHolderf4382 = $valueHolderf4382;
        return $this->valueHolderf4382->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializer7fe19 && ($this->initializer7fe19->__invoke($valueHolderf4382, $this, 'getRepository', array('entityName' => $entityName), $this->initializer7fe19) || 1) && $this->valueHolderf4382 = $valueHolderf4382;
        return $this->valueHolderf4382->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializer7fe19 && ($this->initializer7fe19->__invoke($valueHolderf4382, $this, 'contains', array('entity' => $entity), $this->initializer7fe19) || 1) && $this->valueHolderf4382 = $valueHolderf4382;
        return $this->valueHolderf4382->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializer7fe19 && ($this->initializer7fe19->__invoke($valueHolderf4382, $this, 'getEventManager', array(), $this->initializer7fe19) || 1) && $this->valueHolderf4382 = $valueHolderf4382;
        return $this->valueHolderf4382->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializer7fe19 && ($this->initializer7fe19->__invoke($valueHolderf4382, $this, 'getConfiguration', array(), $this->initializer7fe19) || 1) && $this->valueHolderf4382 = $valueHolderf4382;
        return $this->valueHolderf4382->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializer7fe19 && ($this->initializer7fe19->__invoke($valueHolderf4382, $this, 'isOpen', array(), $this->initializer7fe19) || 1) && $this->valueHolderf4382 = $valueHolderf4382;
        return $this->valueHolderf4382->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializer7fe19 && ($this->initializer7fe19->__invoke($valueHolderf4382, $this, 'getUnitOfWork', array(), $this->initializer7fe19) || 1) && $this->valueHolderf4382 = $valueHolderf4382;
        return $this->valueHolderf4382->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializer7fe19 && ($this->initializer7fe19->__invoke($valueHolderf4382, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer7fe19) || 1) && $this->valueHolderf4382 = $valueHolderf4382;
        return $this->valueHolderf4382->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializer7fe19 && ($this->initializer7fe19->__invoke($valueHolderf4382, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer7fe19) || 1) && $this->valueHolderf4382 = $valueHolderf4382;
        return $this->valueHolderf4382->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializer7fe19 && ($this->initializer7fe19->__invoke($valueHolderf4382, $this, 'getProxyFactory', array(), $this->initializer7fe19) || 1) && $this->valueHolderf4382 = $valueHolderf4382;
        return $this->valueHolderf4382->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializer7fe19 && ($this->initializer7fe19->__invoke($valueHolderf4382, $this, 'initializeObject', array('obj' => $obj), $this->initializer7fe19) || 1) && $this->valueHolderf4382 = $valueHolderf4382;
        return $this->valueHolderf4382->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializer7fe19 && ($this->initializer7fe19->__invoke($valueHolderf4382, $this, 'getFilters', array(), $this->initializer7fe19) || 1) && $this->valueHolderf4382 = $valueHolderf4382;
        return $this->valueHolderf4382->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializer7fe19 && ($this->initializer7fe19->__invoke($valueHolderf4382, $this, 'isFiltersStateClean', array(), $this->initializer7fe19) || 1) && $this->valueHolderf4382 = $valueHolderf4382;
        return $this->valueHolderf4382->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializer7fe19 && ($this->initializer7fe19->__invoke($valueHolderf4382, $this, 'hasFilters', array(), $this->initializer7fe19) || 1) && $this->valueHolderf4382 = $valueHolderf4382;
        return $this->valueHolderf4382->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializer7fe19 = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolderf4382) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderf4382 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolderf4382->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializer7fe19 && ($this->initializer7fe19->__invoke($valueHolderf4382, $this, '__get', ['name' => $name], $this->initializer7fe19) || 1) && $this->valueHolderf4382 = $valueHolderf4382;
        if (isset(self::$publicProperties808f2[$name])) {
            return $this->valueHolderf4382->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
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
