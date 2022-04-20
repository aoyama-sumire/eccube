<?php
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Repository'.\DIRECTORY_SEPARATOR.'PluginRepository.php';

class PluginRepository_c4546a6 extends \Eccube\Repository\PluginRepository implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Eccube\Repository\PluginRepository|null wrapped object, if the proxy is initialized
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

    public function findAllEnabled()
    {
        $this->initializer7fe19 && ($this->initializer7fe19->__invoke($valueHolderf4382, $this, 'findAllEnabled', array(), $this->initializer7fe19) || 1) && $this->valueHolderf4382 = $valueHolderf4382;

        return $this->valueHolderf4382->findAllEnabled();
    }

    public function findByCode($code)
    {
        $this->initializer7fe19 && ($this->initializer7fe19->__invoke($valueHolderf4382, $this, 'findByCode', array('code' => $code), $this->initializer7fe19) || 1) && $this->valueHolderf4382 = $valueHolderf4382;

        return $this->valueHolderf4382->findByCode($code);
    }

    public function delete($entity)
    {
        $this->initializer7fe19 && ($this->initializer7fe19->__invoke($valueHolderf4382, $this, 'delete', array('entity' => $entity), $this->initializer7fe19) || 1) && $this->valueHolderf4382 = $valueHolderf4382;

        return $this->valueHolderf4382->delete($entity);
    }

    public function save($entity)
    {
        $this->initializer7fe19 && ($this->initializer7fe19->__invoke($valueHolderf4382, $this, 'save', array('entity' => $entity), $this->initializer7fe19) || 1) && $this->valueHolderf4382 = $valueHolderf4382;

        return $this->valueHolderf4382->save($entity);
    }

    public function createQueryBuilder($alias, $indexBy = null)
    {
        $this->initializer7fe19 && ($this->initializer7fe19->__invoke($valueHolderf4382, $this, 'createQueryBuilder', array('alias' => $alias, 'indexBy' => $indexBy), $this->initializer7fe19) || 1) && $this->valueHolderf4382 = $valueHolderf4382;

        return $this->valueHolderf4382->createQueryBuilder($alias, $indexBy);
    }

    public function createResultSetMappingBuilder($alias)
    {
        $this->initializer7fe19 && ($this->initializer7fe19->__invoke($valueHolderf4382, $this, 'createResultSetMappingBuilder', array('alias' => $alias), $this->initializer7fe19) || 1) && $this->valueHolderf4382 = $valueHolderf4382;

        return $this->valueHolderf4382->createResultSetMappingBuilder($alias);
    }

    public function createNamedQuery($queryName)
    {
        $this->initializer7fe19 && ($this->initializer7fe19->__invoke($valueHolderf4382, $this, 'createNamedQuery', array('queryName' => $queryName), $this->initializer7fe19) || 1) && $this->valueHolderf4382 = $valueHolderf4382;

        return $this->valueHolderf4382->createNamedQuery($queryName);
    }

    public function createNativeNamedQuery($queryName)
    {
        $this->initializer7fe19 && ($this->initializer7fe19->__invoke($valueHolderf4382, $this, 'createNativeNamedQuery', array('queryName' => $queryName), $this->initializer7fe19) || 1) && $this->valueHolderf4382 = $valueHolderf4382;

        return $this->valueHolderf4382->createNativeNamedQuery($queryName);
    }

    public function clear()
    {
        $this->initializer7fe19 && ($this->initializer7fe19->__invoke($valueHolderf4382, $this, 'clear', array(), $this->initializer7fe19) || 1) && $this->valueHolderf4382 = $valueHolderf4382;

        return $this->valueHolderf4382->clear();
    }

    public function find($id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer7fe19 && ($this->initializer7fe19->__invoke($valueHolderf4382, $this, 'find', array('id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer7fe19) || 1) && $this->valueHolderf4382 = $valueHolderf4382;

        return $this->valueHolderf4382->find($id, $lockMode, $lockVersion);
    }

    public function findAll()
    {
        $this->initializer7fe19 && ($this->initializer7fe19->__invoke($valueHolderf4382, $this, 'findAll', array(), $this->initializer7fe19) || 1) && $this->valueHolderf4382 = $valueHolderf4382;

        return $this->valueHolderf4382->findAll();
    }

    public function findBy(array $criteria, ?array $orderBy = null, $limit = null, $offset = null)
    {
        $this->initializer7fe19 && ($this->initializer7fe19->__invoke($valueHolderf4382, $this, 'findBy', array('criteria' => $criteria, 'orderBy' => $orderBy, 'limit' => $limit, 'offset' => $offset), $this->initializer7fe19) || 1) && $this->valueHolderf4382 = $valueHolderf4382;

        return $this->valueHolderf4382->findBy($criteria, $orderBy, $limit, $offset);
    }

    public function findOneBy(array $criteria, ?array $orderBy = null)
    {
        $this->initializer7fe19 && ($this->initializer7fe19->__invoke($valueHolderf4382, $this, 'findOneBy', array('criteria' => $criteria, 'orderBy' => $orderBy), $this->initializer7fe19) || 1) && $this->valueHolderf4382 = $valueHolderf4382;

        return $this->valueHolderf4382->findOneBy($criteria, $orderBy);
    }

    public function count(array $criteria)
    {
        $this->initializer7fe19 && ($this->initializer7fe19->__invoke($valueHolderf4382, $this, 'count', array('criteria' => $criteria), $this->initializer7fe19) || 1) && $this->valueHolderf4382 = $valueHolderf4382;

        return $this->valueHolderf4382->count($criteria);
    }

    public function __call($method, $arguments)
    {
        $this->initializer7fe19 && ($this->initializer7fe19->__invoke($valueHolderf4382, $this, '__call', array('method' => $method, 'arguments' => $arguments), $this->initializer7fe19) || 1) && $this->valueHolderf4382 = $valueHolderf4382;

        return $this->valueHolderf4382->__call($method, $arguments);
    }

    public function getClassName()
    {
        $this->initializer7fe19 && ($this->initializer7fe19->__invoke($valueHolderf4382, $this, 'getClassName', array(), $this->initializer7fe19) || 1) && $this->valueHolderf4382 = $valueHolderf4382;

        return $this->valueHolderf4382->getClassName();
    }

    public function matching(\Doctrine\Common\Collections\Criteria $criteria)
    {
        $this->initializer7fe19 && ($this->initializer7fe19->__invoke($valueHolderf4382, $this, 'matching', array('criteria' => $criteria), $this->initializer7fe19) || 1) && $this->valueHolderf4382 = $valueHolderf4382;

        return $this->valueHolderf4382->matching($criteria);
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

        unset($instance->eccubeConfig, $instance->_entityName, $instance->_em, $instance->_class);

        $instance->initializer7fe19 = $initializer;

        return $instance;
    }

    public function __construct(\Symfony\Bridge\Doctrine\RegistryInterface $registry)
    {
        static $reflection;

        if (! $this->valueHolderf4382) {
            $reflection = $reflection ?? new \ReflectionClass('Eccube\\Repository\\PluginRepository');
            $this->valueHolderf4382 = $reflection->newInstanceWithoutConstructor();
        unset($this->eccubeConfig, $this->_entityName, $this->_em, $this->_class);

        }

        $this->valueHolderf4382->__construct($registry);
    }

    public function & __get($name)
    {
        $this->initializer7fe19 && ($this->initializer7fe19->__invoke($valueHolderf4382, $this, '__get', ['name' => $name], $this->initializer7fe19) || 1) && $this->valueHolderf4382 = $valueHolderf4382;

        if (isset(self::$publicProperties808f2[$name])) {
            return $this->valueHolderf4382->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Eccube\\Repository\\PluginRepository');

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

        $realInstanceReflection = new \ReflectionClass('Eccube\\Repository\\PluginRepository');

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

        $realInstanceReflection = new \ReflectionClass('Eccube\\Repository\\PluginRepository');

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

        $realInstanceReflection = new \ReflectionClass('Eccube\\Repository\\PluginRepository');

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
        unset($this->eccubeConfig, $this->_entityName, $this->_em, $this->_class);
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
