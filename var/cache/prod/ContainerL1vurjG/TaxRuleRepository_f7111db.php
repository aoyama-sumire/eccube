<?php

include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Repository'.\DIRECTORY_SEPARATOR.'TaxRuleRepository.php';
class TaxRuleRepository_f7111db extends \Eccube\Repository\TaxRuleRepository implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder8f9ea = null;
    private $initializera0977 = null;
    private static $publicPropertiesc4d83 = [
        
    ];
    public function newTaxRule()
    {
        $this->initializera0977 && ($this->initializera0977->__invoke($valueHolder8f9ea, $this, 'newTaxRule', array(), $this->initializera0977) || 1) && $this->valueHolder8f9ea = $valueHolder8f9ea;
        return $this->valueHolder8f9ea->newTaxRule();
    }
    public function getByRule($Product = null, $ProductClass = null, $Pref = null, $Country = null)
    {
        $this->initializera0977 && ($this->initializera0977->__invoke($valueHolder8f9ea, $this, 'getByRule', array('Product' => $Product, 'ProductClass' => $ProductClass, 'Pref' => $Pref, 'Country' => $Country), $this->initializera0977) || 1) && $this->valueHolder8f9ea = $valueHolder8f9ea;
        return $this->valueHolder8f9ea->getByRule($Product, $ProductClass, $Pref, $Country);
    }
    public function getList()
    {
        $this->initializera0977 && ($this->initializera0977->__invoke($valueHolder8f9ea, $this, 'getList', array(), $this->initializera0977) || 1) && $this->valueHolder8f9ea = $valueHolder8f9ea;
        return $this->valueHolder8f9ea->getList();
    }
    public function delete($TaxRule)
    {
        $this->initializera0977 && ($this->initializera0977->__invoke($valueHolder8f9ea, $this, 'delete', array('TaxRule' => $TaxRule), $this->initializera0977) || 1) && $this->valueHolder8f9ea = $valueHolder8f9ea;
        return $this->valueHolder8f9ea->delete($TaxRule);
    }
    public function clearCache()
    {
        $this->initializera0977 && ($this->initializera0977->__invoke($valueHolder8f9ea, $this, 'clearCache', array(), $this->initializera0977) || 1) && $this->valueHolder8f9ea = $valueHolder8f9ea;
        return $this->valueHolder8f9ea->clearCache();
    }
    public function save($entity)
    {
        $this->initializera0977 && ($this->initializera0977->__invoke($valueHolder8f9ea, $this, 'save', array('entity' => $entity), $this->initializera0977) || 1) && $this->valueHolder8f9ea = $valueHolder8f9ea;
        return $this->valueHolder8f9ea->save($entity);
    }
    public function createQueryBuilder($alias, $indexBy = null)
    {
        $this->initializera0977 && ($this->initializera0977->__invoke($valueHolder8f9ea, $this, 'createQueryBuilder', array('alias' => $alias, 'indexBy' => $indexBy), $this->initializera0977) || 1) && $this->valueHolder8f9ea = $valueHolder8f9ea;
        return $this->valueHolder8f9ea->createQueryBuilder($alias, $indexBy);
    }
    public function createResultSetMappingBuilder($alias)
    {
        $this->initializera0977 && ($this->initializera0977->__invoke($valueHolder8f9ea, $this, 'createResultSetMappingBuilder', array('alias' => $alias), $this->initializera0977) || 1) && $this->valueHolder8f9ea = $valueHolder8f9ea;
        return $this->valueHolder8f9ea->createResultSetMappingBuilder($alias);
    }
    public function createNamedQuery($queryName)
    {
        $this->initializera0977 && ($this->initializera0977->__invoke($valueHolder8f9ea, $this, 'createNamedQuery', array('queryName' => $queryName), $this->initializera0977) || 1) && $this->valueHolder8f9ea = $valueHolder8f9ea;
        return $this->valueHolder8f9ea->createNamedQuery($queryName);
    }
    public function createNativeNamedQuery($queryName)
    {
        $this->initializera0977 && ($this->initializera0977->__invoke($valueHolder8f9ea, $this, 'createNativeNamedQuery', array('queryName' => $queryName), $this->initializera0977) || 1) && $this->valueHolder8f9ea = $valueHolder8f9ea;
        return $this->valueHolder8f9ea->createNativeNamedQuery($queryName);
    }
    public function clear()
    {
        $this->initializera0977 && ($this->initializera0977->__invoke($valueHolder8f9ea, $this, 'clear', array(), $this->initializera0977) || 1) && $this->valueHolder8f9ea = $valueHolder8f9ea;
        return $this->valueHolder8f9ea->clear();
    }
    public function find($id, $lockMode = null, $lockVersion = null)
    {
        $this->initializera0977 && ($this->initializera0977->__invoke($valueHolder8f9ea, $this, 'find', array('id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera0977) || 1) && $this->valueHolder8f9ea = $valueHolder8f9ea;
        return $this->valueHolder8f9ea->find($id, $lockMode, $lockVersion);
    }
    public function findAll()
    {
        $this->initializera0977 && ($this->initializera0977->__invoke($valueHolder8f9ea, $this, 'findAll', array(), $this->initializera0977) || 1) && $this->valueHolder8f9ea = $valueHolder8f9ea;
        return $this->valueHolder8f9ea->findAll();
    }
    public function findBy(array $criteria, ?array $orderBy = null, $limit = null, $offset = null)
    {
        $this->initializera0977 && ($this->initializera0977->__invoke($valueHolder8f9ea, $this, 'findBy', array('criteria' => $criteria, 'orderBy' => $orderBy, 'limit' => $limit, 'offset' => $offset), $this->initializera0977) || 1) && $this->valueHolder8f9ea = $valueHolder8f9ea;
        return $this->valueHolder8f9ea->findBy($criteria, $orderBy, $limit, $offset);
    }
    public function findOneBy(array $criteria, ?array $orderBy = null)
    {
        $this->initializera0977 && ($this->initializera0977->__invoke($valueHolder8f9ea, $this, 'findOneBy', array('criteria' => $criteria, 'orderBy' => $orderBy), $this->initializera0977) || 1) && $this->valueHolder8f9ea = $valueHolder8f9ea;
        return $this->valueHolder8f9ea->findOneBy($criteria, $orderBy);
    }
    public function count(array $criteria)
    {
        $this->initializera0977 && ($this->initializera0977->__invoke($valueHolder8f9ea, $this, 'count', array('criteria' => $criteria), $this->initializera0977) || 1) && $this->valueHolder8f9ea = $valueHolder8f9ea;
        return $this->valueHolder8f9ea->count($criteria);
    }
    public function __call($method, $arguments)
    {
        $this->initializera0977 && ($this->initializera0977->__invoke($valueHolder8f9ea, $this, '__call', array('method' => $method, 'arguments' => $arguments), $this->initializera0977) || 1) && $this->valueHolder8f9ea = $valueHolder8f9ea;
        return $this->valueHolder8f9ea->__call($method, $arguments);
    }
    public function getClassName()
    {
        $this->initializera0977 && ($this->initializera0977->__invoke($valueHolder8f9ea, $this, 'getClassName', array(), $this->initializera0977) || 1) && $this->valueHolder8f9ea = $valueHolder8f9ea;
        return $this->valueHolder8f9ea->getClassName();
    }
    public function matching(\Doctrine\Common\Collections\Criteria $criteria)
    {
        $this->initializera0977 && ($this->initializera0977->__invoke($valueHolder8f9ea, $this, 'matching', array('criteria' => $criteria), $this->initializera0977) || 1) && $this->valueHolder8f9ea = $valueHolder8f9ea;
        return $this->valueHolder8f9ea->matching($criteria);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        unset($instance->baseInfo, $instance->authorizationChecker, $instance->tokenStorage, $instance->eccubeConfig, $instance->_entityName, $instance->_em, $instance->_class);
        \Closure::bind(function (\Eccube\Repository\TaxRuleRepository $instance) {
            unset($instance->rules);
        }, $instance, 'Eccube\\Repository\\TaxRuleRepository')->__invoke($instance);
        $instance->initializera0977 = $initializer;
        return $instance;
    }
    public function __construct(\Symfony\Bridge\Doctrine\RegistryInterface $registry, \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface $tokenStorage, \Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface $authorizationChecker, \Eccube\Repository\BaseInfoRepository $baseInfoRepository, \Eccube\Common\EccubeConfig $eccubeConfig)
    {
        static $reflection;
        if (! $this->valueHolder8f9ea) {
            $reflection = $reflection ?? new \ReflectionClass('Eccube\\Repository\\TaxRuleRepository');
            $this->valueHolder8f9ea = $reflection->newInstanceWithoutConstructor();
        unset($this->baseInfo, $this->authorizationChecker, $this->tokenStorage, $this->eccubeConfig, $this->_entityName, $this->_em, $this->_class);
        \Closure::bind(function (\Eccube\Repository\TaxRuleRepository $instance) {
            unset($instance->rules);
        }, $this, 'Eccube\\Repository\\TaxRuleRepository')->__invoke($this);
        }
        $this->valueHolder8f9ea->__construct($registry, $tokenStorage, $authorizationChecker, $baseInfoRepository, $eccubeConfig);
    }
    public function & __get($name)
    {
        $this->initializera0977 && ($this->initializera0977->__invoke($valueHolder8f9ea, $this, '__get', ['name' => $name], $this->initializera0977) || 1) && $this->valueHolder8f9ea = $valueHolder8f9ea;
        if (isset(self::$publicPropertiesc4d83[$name])) {
            return $this->valueHolder8f9ea->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Eccube\\Repository\\TaxRuleRepository');
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
        $realInstanceReflection = new \ReflectionClass('Eccube\\Repository\\TaxRuleRepository');
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
        $realInstanceReflection = new \ReflectionClass('Eccube\\Repository\\TaxRuleRepository');
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
        $realInstanceReflection = new \ReflectionClass('Eccube\\Repository\\TaxRuleRepository');
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
        unset($this->baseInfo, $this->authorizationChecker, $this->tokenStorage, $this->eccubeConfig, $this->_entityName, $this->_em, $this->_class);
        \Closure::bind(function (\Eccube\Repository\TaxRuleRepository $instance) {
            unset($instance->rules);
        }, $this, 'Eccube\\Repository\\TaxRuleRepository')->__invoke($this);
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
