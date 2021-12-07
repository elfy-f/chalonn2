<?php

namespace Container4MMedxp;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-components'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Knp'.\DIRECTORY_SEPARATOR.'Component'.\DIRECTORY_SEPARATOR.'Pager'.\DIRECTORY_SEPARATOR.'PaginatorInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-components'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Knp'.\DIRECTORY_SEPARATOR.'Component'.\DIRECTORY_SEPARATOR.'Pager'.\DIRECTORY_SEPARATOR.'Paginator.php';

class PaginatorInterface_82dac15 implements \ProxyManager\Proxy\VirtualProxyInterface, \Knp\Component\Pager\PaginatorInterface
{
    /**
     * @var \Knp\Component\Pager\PaginatorInterface|null wrapped object, if the proxy is initialized
     */
    private $valueHolder49cad = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer9de4e = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties80724 = [
        
    ];

    public function paginate($target, int $page = 1, ?int $limit = null, array $options = []) : \Knp\Component\Pager\Pagination\PaginationInterface
    {
        $this->initializer9de4e && ($this->initializer9de4e->__invoke($valueHolder49cad, $this, 'paginate', array('target' => $target, 'page' => $page, 'limit' => $limit, 'options' => $options), $this->initializer9de4e) || 1) && $this->valueHolder49cad = $valueHolder49cad;

        if ($this->valueHolder49cad === $returnValue = $this->valueHolder49cad->paginate($target, $page, $limit, $options)) {
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

        $instance->initializer9de4e = $initializer;

        return $instance;
    }

    public function __construct()
    {
        static $reflection;

        if (! $this->valueHolder49cad) {
            $reflection = $reflection ?? new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
            $this->valueHolder49cad = $reflection->newInstanceWithoutConstructor();
        }
    }

    public function & __get($name)
    {
        $this->initializer9de4e && ($this->initializer9de4e->__invoke($valueHolder49cad, $this, '__get', ['name' => $name], $this->initializer9de4e) || 1) && $this->valueHolder49cad = $valueHolder49cad;

        if (isset(self::$publicProperties80724[$name])) {
            return $this->valueHolder49cad->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder49cad;

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

        $targetObject = $this->valueHolder49cad;
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
        $this->initializer9de4e && ($this->initializer9de4e->__invoke($valueHolder49cad, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer9de4e) || 1) && $this->valueHolder49cad = $valueHolder49cad;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder49cad;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder49cad;
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
        $this->initializer9de4e && ($this->initializer9de4e->__invoke($valueHolder49cad, $this, '__isset', array('name' => $name), $this->initializer9de4e) || 1) && $this->valueHolder49cad = $valueHolder49cad;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder49cad;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder49cad;
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
        $this->initializer9de4e && ($this->initializer9de4e->__invoke($valueHolder49cad, $this, '__unset', array('name' => $name), $this->initializer9de4e) || 1) && $this->valueHolder49cad = $valueHolder49cad;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder49cad;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder49cad;
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
        $this->initializer9de4e && ($this->initializer9de4e->__invoke($valueHolder49cad, $this, '__clone', array(), $this->initializer9de4e) || 1) && $this->valueHolder49cad = $valueHolder49cad;

        $this->valueHolder49cad = clone $this->valueHolder49cad;
    }

    public function __sleep()
    {
        $this->initializer9de4e && ($this->initializer9de4e->__invoke($valueHolder49cad, $this, '__sleep', array(), $this->initializer9de4e) || 1) && $this->valueHolder49cad = $valueHolder49cad;

        return array('valueHolder49cad');
    }

    public function __wakeup()
    {
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer9de4e = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer9de4e;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer9de4e && ($this->initializer9de4e->__invoke($valueHolder49cad, $this, 'initializeProxy', array(), $this->initializer9de4e) || 1) && $this->valueHolder49cad = $valueHolder49cad;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder49cad;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder49cad;
    }
}

if (!\class_exists('PaginatorInterface_82dac15', false)) {
    \class_alias(__NAMESPACE__.'\\PaginatorInterface_82dac15', 'PaginatorInterface_82dac15', false);
}
