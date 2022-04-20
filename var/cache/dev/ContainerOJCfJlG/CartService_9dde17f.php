<?php
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'CartService.php';

class CartService_9dde17f extends \Eccube\Service\CartService implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Eccube\Service\CartService|null wrapped object, if the proxy is initialized
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

    public function getCarts($empty_delete = false)
    {
        $this->initializer7fe19 && ($this->initializer7fe19->__invoke($valueHolderf4382, $this, 'getCarts', array('empty_delete' => $empty_delete), $this->initializer7fe19) || 1) && $this->valueHolderf4382 = $valueHolderf4382;

        return $this->valueHolderf4382->getCarts($empty_delete);
    }

    public function getPersistedCarts()
    {
        $this->initializer7fe19 && ($this->initializer7fe19->__invoke($valueHolderf4382, $this, 'getPersistedCarts', array(), $this->initializer7fe19) || 1) && $this->valueHolderf4382 = $valueHolderf4382;

        return $this->valueHolderf4382->getPersistedCarts();
    }

    public function getSessionCarts()
    {
        $this->initializer7fe19 && ($this->initializer7fe19->__invoke($valueHolderf4382, $this, 'getSessionCarts', array(), $this->initializer7fe19) || 1) && $this->valueHolderf4382 = $valueHolderf4382;

        return $this->valueHolderf4382->getSessionCarts();
    }

    public function mergeFromPersistedCart()
    {
        $this->initializer7fe19 && ($this->initializer7fe19->__invoke($valueHolderf4382, $this, 'mergeFromPersistedCart', array(), $this->initializer7fe19) || 1) && $this->valueHolderf4382 = $valueHolderf4382;

        return $this->valueHolderf4382->mergeFromPersistedCart();
    }

    public function getCart()
    {
        $this->initializer7fe19 && ($this->initializer7fe19->__invoke($valueHolderf4382, $this, 'getCart', array(), $this->initializer7fe19) || 1) && $this->valueHolderf4382 = $valueHolderf4382;

        return $this->valueHolderf4382->getCart();
    }

    public function addProduct($ProductClass, $quantity = 1)
    {
        $this->initializer7fe19 && ($this->initializer7fe19->__invoke($valueHolderf4382, $this, 'addProduct', array('ProductClass' => $ProductClass, 'quantity' => $quantity), $this->initializer7fe19) || 1) && $this->valueHolderf4382 = $valueHolderf4382;

        return $this->valueHolderf4382->addProduct($ProductClass, $quantity);
    }

    public function removeProduct($ProductClass)
    {
        $this->initializer7fe19 && ($this->initializer7fe19->__invoke($valueHolderf4382, $this, 'removeProduct', array('ProductClass' => $ProductClass), $this->initializer7fe19) || 1) && $this->valueHolderf4382 = $valueHolderf4382;

        return $this->valueHolderf4382->removeProduct($ProductClass);
    }

    public function save()
    {
        $this->initializer7fe19 && ($this->initializer7fe19->__invoke($valueHolderf4382, $this, 'save', array(), $this->initializer7fe19) || 1) && $this->valueHolderf4382 = $valueHolderf4382;

        return $this->valueHolderf4382->save();
    }

    public function setPreOrderId($pre_order_id)
    {
        $this->initializer7fe19 && ($this->initializer7fe19->__invoke($valueHolderf4382, $this, 'setPreOrderId', array('pre_order_id' => $pre_order_id), $this->initializer7fe19) || 1) && $this->valueHolderf4382 = $valueHolderf4382;

        return $this->valueHolderf4382->setPreOrderId($pre_order_id);
    }

    public function getPreOrderId()
    {
        $this->initializer7fe19 && ($this->initializer7fe19->__invoke($valueHolderf4382, $this, 'getPreOrderId', array(), $this->initializer7fe19) || 1) && $this->valueHolderf4382 = $valueHolderf4382;

        return $this->valueHolderf4382->getPreOrderId();
    }

    public function clear()
    {
        $this->initializer7fe19 && ($this->initializer7fe19->__invoke($valueHolderf4382, $this, 'clear', array(), $this->initializer7fe19) || 1) && $this->valueHolderf4382 = $valueHolderf4382;

        return $this->valueHolderf4382->clear();
    }

    public function setCartItemComparator($cartItemComparator)
    {
        $this->initializer7fe19 && ($this->initializer7fe19->__invoke($valueHolderf4382, $this, 'setCartItemComparator', array('cartItemComparator' => $cartItemComparator), $this->initializer7fe19) || 1) && $this->valueHolderf4382 = $valueHolderf4382;

        return $this->valueHolderf4382->setCartItemComparator($cartItemComparator);
    }

    public function setPrimary($cartKey)
    {
        $this->initializer7fe19 && ($this->initializer7fe19->__invoke($valueHolderf4382, $this, 'setPrimary', array('cartKey' => $cartKey), $this->initializer7fe19) || 1) && $this->valueHolderf4382 = $valueHolderf4382;

        return $this->valueHolderf4382->setPrimary($cartKey);
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

        unset($instance->carts, $instance->session, $instance->entityManager, $instance->cart, $instance->productClassRepository, $instance->cartRepository, $instance->cartItemComparator, $instance->cartItemAllocator, $instance->orderRepository, $instance->tokenStorage, $instance->authorizationChecker);

        $instance->initializer7fe19 = $initializer;

        return $instance;
    }

    public function __construct(\Symfony\Component\HttpFoundation\Session\SessionInterface $session, \Doctrine\ORM\EntityManagerInterface $entityManager, \Eccube\Repository\ProductClassRepository $productClassRepository, \Eccube\Repository\CartRepository $cartRepository, \Eccube\Service\Cart\CartItemComparator $cartItemComparator, \Eccube\Service\Cart\CartItemAllocator $cartItemAllocator, \Eccube\Repository\OrderRepository $orderRepository, \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface $tokenStorage, \Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface $authorizationChecker)
    {
        static $reflection;

        if (! $this->valueHolderf4382) {
            $reflection = $reflection ?? new \ReflectionClass('Eccube\\Service\\CartService');
            $this->valueHolderf4382 = $reflection->newInstanceWithoutConstructor();
        unset($this->carts, $this->session, $this->entityManager, $this->cart, $this->productClassRepository, $this->cartRepository, $this->cartItemComparator, $this->cartItemAllocator, $this->orderRepository, $this->tokenStorage, $this->authorizationChecker);

        }

        $this->valueHolderf4382->__construct($session, $entityManager, $productClassRepository, $cartRepository, $cartItemComparator, $cartItemAllocator, $orderRepository, $tokenStorage, $authorizationChecker);
    }

    public function & __get($name)
    {
        $this->initializer7fe19 && ($this->initializer7fe19->__invoke($valueHolderf4382, $this, '__get', ['name' => $name], $this->initializer7fe19) || 1) && $this->valueHolderf4382 = $valueHolderf4382;

        if (isset(self::$publicProperties808f2[$name])) {
            return $this->valueHolderf4382->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\CartService');

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

        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\CartService');

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

        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\CartService');

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

        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\CartService');

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
        unset($this->carts, $this->session, $this->entityManager, $this->cart, $this->productClassRepository, $this->cartRepository, $this->cartItemComparator, $this->cartItemAllocator, $this->orderRepository, $this->tokenStorage, $this->authorizationChecker);
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
