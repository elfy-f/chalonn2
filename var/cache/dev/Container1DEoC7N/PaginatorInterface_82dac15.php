<?php

namespace Container1DEoC7N;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-components'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Knp'.\DIRECTORY_SEPARATOR.'Component'.\DIRECTORY_SEPARATOR.'Pager'.\DIRECTORY_SEPARATOR.'PaginatorInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-components'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Knp'.\DIRECTORY_SEPARATOR.'Component'.\DIRECTORY_SEPARATOR.'Pager'.\DIRECTORY_SEPARATOR.'Paginator.php';

class PaginatorInterface_82dac15 implements \ProxyManager\Proxy\VirtualProxyInterface, \Knp\Component\Pager\PaginatorInterface
{
    /**
     * @var \Knp\Component\Pager\PaginatorInterface|null wrapped object, if the proxy is initialized
     */
    private $valueHolder605cf = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializera3ac3 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties941a4 = [
        
    ];

    public function paginate($target, int $page = 1, ?int $limit = null, array $options = []) : \Knp\Component\Pager\Pagination\PaginationInterface
    {
        $this->initializera3ac3 && ($this->initializera3ac3->__invoke($valueHolder605cf, $this, 'paginate', array('target' => $target, 'page' => $page, 'limit' => $limit, 'options' => $options), $this->initializera3ac3) || 1) && $this->valueHolder605cf = $valueHolder605cf;

        if ($this->valueHolder605cf === $returnValue = $this->valueHolder605cf->paginate($target, $page, $limit, $options)) {
            return $this;
        }

        return $returnValue;
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

        $instance->initializera3ac3 = $initializer;

        return $instance;
    }

    public function __construct()
    {
        static $reflection;

        if (! $this->valueHolder605cf) {
            $reflection = $reflection ?? new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
            $this->valueHolder605cf = $reflection->newInstanceWithoutConstructor();
        }
    }

    public function & __get($name)
    {
        $this->initializera3ac3 && ($this->initializera3ac3->__invoke($valueHolder605cf, $this, '__get', ['name' => $name], $this->initializera3ac3) || 1) && $this->valueHolder605cf = $valueHolder605cf;

        if (isset(self::$publicProperties941a4[$name])) {
            return $this->valueHolder605cf->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder605cf;

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

        $targetObject = $this->valueHolder605cf;
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
        $this->initializera3ac3 && ($this->initializera3ac3->__invoke($valueHolder605cf, $this, '__set', array('name' => $name, 'value' => $value), $this->initializera3ac3) || 1) && $this->valueHolder605cf = $valueHolder605cf;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder605cf;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder605cf;
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
        $this->initializera3ac3 && ($this->initializera3ac3->__invoke($valueHolder605cf, $this, '__isset', array('name' => $name), $this->initializera3ac3) || 1) && $this->valueHolder605cf = $valueHolder605cf;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder605cf;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder605cf;
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
        $this->initializera3ac3 && ($this->initializera3ac3->__invoke($valueHolder605cf, $this, '__unset', array('name' => $name), $this->initializera3ac3) || 1) && $this->valueHolder605cf = $valueHolder605cf;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder605cf;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder605cf;
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
        $this->initializera3ac3 && ($this->initializera3ac3->__invoke($valueHolder605cf, $this, '__clone', array(), $this->initializera3ac3) || 1) && $this->valueHolder605cf = $valueHolder605cf;

        $this->valueHolder605cf = clone $this->valueHolder605cf;
    }

    public function __sleep()
    {
        $this->initializera3ac3 && ($this->initializera3ac3->__invoke($valueHolder605cf, $this, '__sleep', array(), $this->initializera3ac3) || 1) && $this->valueHolder605cf = $valueHolder605cf;

        return array('valueHolder605cf');
    }

    public function __wakeup()
    {
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializera3ac3 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializera3ac3;
    }

    public function initializeProxy() : bool
    {
        return $this->initializera3ac3 && ($this->initializera3ac3->__invoke($valueHolder605cf, $this, 'initializeProxy', array(), $this->initializera3ac3) || 1) && $this->valueHolder605cf = $valueHolder605cf;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder605cf;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder605cf;
    }
}

if (!\class_exists('PaginatorInterface_82dac15', false)) {
    \class_alias(__NAMESPACE__.'\\PaginatorInterface_82dac15', 'PaginatorInterface_82dac15', false);
}
