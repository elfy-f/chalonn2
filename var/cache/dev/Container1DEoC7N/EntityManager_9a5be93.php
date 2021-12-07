<?php

namespace Container1DEoC7N;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
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

    public function getConnection()
    {
        $this->initializera3ac3 && ($this->initializera3ac3->__invoke($valueHolder605cf, $this, 'getConnection', array(), $this->initializera3ac3) || 1) && $this->valueHolder605cf = $valueHolder605cf;

        return $this->valueHolder605cf->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializera3ac3 && ($this->initializera3ac3->__invoke($valueHolder605cf, $this, 'getMetadataFactory', array(), $this->initializera3ac3) || 1) && $this->valueHolder605cf = $valueHolder605cf;

        return $this->valueHolder605cf->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializera3ac3 && ($this->initializera3ac3->__invoke($valueHolder605cf, $this, 'getExpressionBuilder', array(), $this->initializera3ac3) || 1) && $this->valueHolder605cf = $valueHolder605cf;

        return $this->valueHolder605cf->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializera3ac3 && ($this->initializera3ac3->__invoke($valueHolder605cf, $this, 'beginTransaction', array(), $this->initializera3ac3) || 1) && $this->valueHolder605cf = $valueHolder605cf;

        return $this->valueHolder605cf->beginTransaction();
    }

    public function getCache()
    {
        $this->initializera3ac3 && ($this->initializera3ac3->__invoke($valueHolder605cf, $this, 'getCache', array(), $this->initializera3ac3) || 1) && $this->valueHolder605cf = $valueHolder605cf;

        return $this->valueHolder605cf->getCache();
    }

    public function transactional($func)
    {
        $this->initializera3ac3 && ($this->initializera3ac3->__invoke($valueHolder605cf, $this, 'transactional', array('func' => $func), $this->initializera3ac3) || 1) && $this->valueHolder605cf = $valueHolder605cf;

        return $this->valueHolder605cf->transactional($func);
    }

    public function commit()
    {
        $this->initializera3ac3 && ($this->initializera3ac3->__invoke($valueHolder605cf, $this, 'commit', array(), $this->initializera3ac3) || 1) && $this->valueHolder605cf = $valueHolder605cf;

        return $this->valueHolder605cf->commit();
    }

    public function rollback()
    {
        $this->initializera3ac3 && ($this->initializera3ac3->__invoke($valueHolder605cf, $this, 'rollback', array(), $this->initializera3ac3) || 1) && $this->valueHolder605cf = $valueHolder605cf;

        return $this->valueHolder605cf->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializera3ac3 && ($this->initializera3ac3->__invoke($valueHolder605cf, $this, 'getClassMetadata', array('className' => $className), $this->initializera3ac3) || 1) && $this->valueHolder605cf = $valueHolder605cf;

        return $this->valueHolder605cf->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializera3ac3 && ($this->initializera3ac3->__invoke($valueHolder605cf, $this, 'createQuery', array('dql' => $dql), $this->initializera3ac3) || 1) && $this->valueHolder605cf = $valueHolder605cf;

        return $this->valueHolder605cf->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializera3ac3 && ($this->initializera3ac3->__invoke($valueHolder605cf, $this, 'createNamedQuery', array('name' => $name), $this->initializera3ac3) || 1) && $this->valueHolder605cf = $valueHolder605cf;

        return $this->valueHolder605cf->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializera3ac3 && ($this->initializera3ac3->__invoke($valueHolder605cf, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializera3ac3) || 1) && $this->valueHolder605cf = $valueHolder605cf;

        return $this->valueHolder605cf->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializera3ac3 && ($this->initializera3ac3->__invoke($valueHolder605cf, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializera3ac3) || 1) && $this->valueHolder605cf = $valueHolder605cf;

        return $this->valueHolder605cf->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializera3ac3 && ($this->initializera3ac3->__invoke($valueHolder605cf, $this, 'createQueryBuilder', array(), $this->initializera3ac3) || 1) && $this->valueHolder605cf = $valueHolder605cf;

        return $this->valueHolder605cf->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializera3ac3 && ($this->initializera3ac3->__invoke($valueHolder605cf, $this, 'flush', array('entity' => $entity), $this->initializera3ac3) || 1) && $this->valueHolder605cf = $valueHolder605cf;

        return $this->valueHolder605cf->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializera3ac3 && ($this->initializera3ac3->__invoke($valueHolder605cf, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera3ac3) || 1) && $this->valueHolder605cf = $valueHolder605cf;

        return $this->valueHolder605cf->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializera3ac3 && ($this->initializera3ac3->__invoke($valueHolder605cf, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializera3ac3) || 1) && $this->valueHolder605cf = $valueHolder605cf;

        return $this->valueHolder605cf->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializera3ac3 && ($this->initializera3ac3->__invoke($valueHolder605cf, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializera3ac3) || 1) && $this->valueHolder605cf = $valueHolder605cf;

        return $this->valueHolder605cf->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializera3ac3 && ($this->initializera3ac3->__invoke($valueHolder605cf, $this, 'clear', array('entityName' => $entityName), $this->initializera3ac3) || 1) && $this->valueHolder605cf = $valueHolder605cf;

        return $this->valueHolder605cf->clear($entityName);
    }

    public function close()
    {
        $this->initializera3ac3 && ($this->initializera3ac3->__invoke($valueHolder605cf, $this, 'close', array(), $this->initializera3ac3) || 1) && $this->valueHolder605cf = $valueHolder605cf;

        return $this->valueHolder605cf->close();
    }

    public function persist($entity)
    {
        $this->initializera3ac3 && ($this->initializera3ac3->__invoke($valueHolder605cf, $this, 'persist', array('entity' => $entity), $this->initializera3ac3) || 1) && $this->valueHolder605cf = $valueHolder605cf;

        return $this->valueHolder605cf->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializera3ac3 && ($this->initializera3ac3->__invoke($valueHolder605cf, $this, 'remove', array('entity' => $entity), $this->initializera3ac3) || 1) && $this->valueHolder605cf = $valueHolder605cf;

        return $this->valueHolder605cf->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializera3ac3 && ($this->initializera3ac3->__invoke($valueHolder605cf, $this, 'refresh', array('entity' => $entity), $this->initializera3ac3) || 1) && $this->valueHolder605cf = $valueHolder605cf;

        return $this->valueHolder605cf->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializera3ac3 && ($this->initializera3ac3->__invoke($valueHolder605cf, $this, 'detach', array('entity' => $entity), $this->initializera3ac3) || 1) && $this->valueHolder605cf = $valueHolder605cf;

        return $this->valueHolder605cf->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializera3ac3 && ($this->initializera3ac3->__invoke($valueHolder605cf, $this, 'merge', array('entity' => $entity), $this->initializera3ac3) || 1) && $this->valueHolder605cf = $valueHolder605cf;

        return $this->valueHolder605cf->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializera3ac3 && ($this->initializera3ac3->__invoke($valueHolder605cf, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializera3ac3) || 1) && $this->valueHolder605cf = $valueHolder605cf;

        return $this->valueHolder605cf->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializera3ac3 && ($this->initializera3ac3->__invoke($valueHolder605cf, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera3ac3) || 1) && $this->valueHolder605cf = $valueHolder605cf;

        return $this->valueHolder605cf->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializera3ac3 && ($this->initializera3ac3->__invoke($valueHolder605cf, $this, 'getRepository', array('entityName' => $entityName), $this->initializera3ac3) || 1) && $this->valueHolder605cf = $valueHolder605cf;

        return $this->valueHolder605cf->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializera3ac3 && ($this->initializera3ac3->__invoke($valueHolder605cf, $this, 'contains', array('entity' => $entity), $this->initializera3ac3) || 1) && $this->valueHolder605cf = $valueHolder605cf;

        return $this->valueHolder605cf->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializera3ac3 && ($this->initializera3ac3->__invoke($valueHolder605cf, $this, 'getEventManager', array(), $this->initializera3ac3) || 1) && $this->valueHolder605cf = $valueHolder605cf;

        return $this->valueHolder605cf->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializera3ac3 && ($this->initializera3ac3->__invoke($valueHolder605cf, $this, 'getConfiguration', array(), $this->initializera3ac3) || 1) && $this->valueHolder605cf = $valueHolder605cf;

        return $this->valueHolder605cf->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializera3ac3 && ($this->initializera3ac3->__invoke($valueHolder605cf, $this, 'isOpen', array(), $this->initializera3ac3) || 1) && $this->valueHolder605cf = $valueHolder605cf;

        return $this->valueHolder605cf->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializera3ac3 && ($this->initializera3ac3->__invoke($valueHolder605cf, $this, 'getUnitOfWork', array(), $this->initializera3ac3) || 1) && $this->valueHolder605cf = $valueHolder605cf;

        return $this->valueHolder605cf->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializera3ac3 && ($this->initializera3ac3->__invoke($valueHolder605cf, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializera3ac3) || 1) && $this->valueHolder605cf = $valueHolder605cf;

        return $this->valueHolder605cf->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializera3ac3 && ($this->initializera3ac3->__invoke($valueHolder605cf, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializera3ac3) || 1) && $this->valueHolder605cf = $valueHolder605cf;

        return $this->valueHolder605cf->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializera3ac3 && ($this->initializera3ac3->__invoke($valueHolder605cf, $this, 'getProxyFactory', array(), $this->initializera3ac3) || 1) && $this->valueHolder605cf = $valueHolder605cf;

        return $this->valueHolder605cf->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializera3ac3 && ($this->initializera3ac3->__invoke($valueHolder605cf, $this, 'initializeObject', array('obj' => $obj), $this->initializera3ac3) || 1) && $this->valueHolder605cf = $valueHolder605cf;

        return $this->valueHolder605cf->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializera3ac3 && ($this->initializera3ac3->__invoke($valueHolder605cf, $this, 'getFilters', array(), $this->initializera3ac3) || 1) && $this->valueHolder605cf = $valueHolder605cf;

        return $this->valueHolder605cf->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializera3ac3 && ($this->initializera3ac3->__invoke($valueHolder605cf, $this, 'isFiltersStateClean', array(), $this->initializera3ac3) || 1) && $this->valueHolder605cf = $valueHolder605cf;

        return $this->valueHolder605cf->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializera3ac3 && ($this->initializera3ac3->__invoke($valueHolder605cf, $this, 'hasFilters', array(), $this->initializera3ac3) || 1) && $this->valueHolder605cf = $valueHolder605cf;

        return $this->valueHolder605cf->hasFilters();
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

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializera3ac3 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder605cf) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder605cf = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder605cf->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializera3ac3 && ($this->initializera3ac3->__invoke($valueHolder605cf, $this, '__get', ['name' => $name], $this->initializera3ac3) || 1) && $this->valueHolder605cf = $valueHolder605cf;

        if (isset(self::$publicProperties941a4[$name])) {
            return $this->valueHolder605cf->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
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

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
