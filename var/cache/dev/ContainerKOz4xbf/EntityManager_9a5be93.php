<?php

namespace ContainerKOz4xbf;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder65c07 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer3ec81 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties93302 = [
        
    ];

    public function getConnection()
    {
        $this->initializer3ec81 && ($this->initializer3ec81->__invoke($valueHolder65c07, $this, 'getConnection', array(), $this->initializer3ec81) || 1) && $this->valueHolder65c07 = $valueHolder65c07;

        return $this->valueHolder65c07->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer3ec81 && ($this->initializer3ec81->__invoke($valueHolder65c07, $this, 'getMetadataFactory', array(), $this->initializer3ec81) || 1) && $this->valueHolder65c07 = $valueHolder65c07;

        return $this->valueHolder65c07->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer3ec81 && ($this->initializer3ec81->__invoke($valueHolder65c07, $this, 'getExpressionBuilder', array(), $this->initializer3ec81) || 1) && $this->valueHolder65c07 = $valueHolder65c07;

        return $this->valueHolder65c07->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer3ec81 && ($this->initializer3ec81->__invoke($valueHolder65c07, $this, 'beginTransaction', array(), $this->initializer3ec81) || 1) && $this->valueHolder65c07 = $valueHolder65c07;

        return $this->valueHolder65c07->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer3ec81 && ($this->initializer3ec81->__invoke($valueHolder65c07, $this, 'getCache', array(), $this->initializer3ec81) || 1) && $this->valueHolder65c07 = $valueHolder65c07;

        return $this->valueHolder65c07->getCache();
    }

    public function transactional($func)
    {
        $this->initializer3ec81 && ($this->initializer3ec81->__invoke($valueHolder65c07, $this, 'transactional', array('func' => $func), $this->initializer3ec81) || 1) && $this->valueHolder65c07 = $valueHolder65c07;

        return $this->valueHolder65c07->transactional($func);
    }

    public function commit()
    {
        $this->initializer3ec81 && ($this->initializer3ec81->__invoke($valueHolder65c07, $this, 'commit', array(), $this->initializer3ec81) || 1) && $this->valueHolder65c07 = $valueHolder65c07;

        return $this->valueHolder65c07->commit();
    }

    public function rollback()
    {
        $this->initializer3ec81 && ($this->initializer3ec81->__invoke($valueHolder65c07, $this, 'rollback', array(), $this->initializer3ec81) || 1) && $this->valueHolder65c07 = $valueHolder65c07;

        return $this->valueHolder65c07->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer3ec81 && ($this->initializer3ec81->__invoke($valueHolder65c07, $this, 'getClassMetadata', array('className' => $className), $this->initializer3ec81) || 1) && $this->valueHolder65c07 = $valueHolder65c07;

        return $this->valueHolder65c07->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer3ec81 && ($this->initializer3ec81->__invoke($valueHolder65c07, $this, 'createQuery', array('dql' => $dql), $this->initializer3ec81) || 1) && $this->valueHolder65c07 = $valueHolder65c07;

        return $this->valueHolder65c07->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer3ec81 && ($this->initializer3ec81->__invoke($valueHolder65c07, $this, 'createNamedQuery', array('name' => $name), $this->initializer3ec81) || 1) && $this->valueHolder65c07 = $valueHolder65c07;

        return $this->valueHolder65c07->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer3ec81 && ($this->initializer3ec81->__invoke($valueHolder65c07, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer3ec81) || 1) && $this->valueHolder65c07 = $valueHolder65c07;

        return $this->valueHolder65c07->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer3ec81 && ($this->initializer3ec81->__invoke($valueHolder65c07, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer3ec81) || 1) && $this->valueHolder65c07 = $valueHolder65c07;

        return $this->valueHolder65c07->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer3ec81 && ($this->initializer3ec81->__invoke($valueHolder65c07, $this, 'createQueryBuilder', array(), $this->initializer3ec81) || 1) && $this->valueHolder65c07 = $valueHolder65c07;

        return $this->valueHolder65c07->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer3ec81 && ($this->initializer3ec81->__invoke($valueHolder65c07, $this, 'flush', array('entity' => $entity), $this->initializer3ec81) || 1) && $this->valueHolder65c07 = $valueHolder65c07;

        return $this->valueHolder65c07->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer3ec81 && ($this->initializer3ec81->__invoke($valueHolder65c07, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer3ec81) || 1) && $this->valueHolder65c07 = $valueHolder65c07;

        return $this->valueHolder65c07->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer3ec81 && ($this->initializer3ec81->__invoke($valueHolder65c07, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer3ec81) || 1) && $this->valueHolder65c07 = $valueHolder65c07;

        return $this->valueHolder65c07->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer3ec81 && ($this->initializer3ec81->__invoke($valueHolder65c07, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer3ec81) || 1) && $this->valueHolder65c07 = $valueHolder65c07;

        return $this->valueHolder65c07->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer3ec81 && ($this->initializer3ec81->__invoke($valueHolder65c07, $this, 'clear', array('entityName' => $entityName), $this->initializer3ec81) || 1) && $this->valueHolder65c07 = $valueHolder65c07;

        return $this->valueHolder65c07->clear($entityName);
    }

    public function close()
    {
        $this->initializer3ec81 && ($this->initializer3ec81->__invoke($valueHolder65c07, $this, 'close', array(), $this->initializer3ec81) || 1) && $this->valueHolder65c07 = $valueHolder65c07;

        return $this->valueHolder65c07->close();
    }

    public function persist($entity)
    {
        $this->initializer3ec81 && ($this->initializer3ec81->__invoke($valueHolder65c07, $this, 'persist', array('entity' => $entity), $this->initializer3ec81) || 1) && $this->valueHolder65c07 = $valueHolder65c07;

        return $this->valueHolder65c07->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer3ec81 && ($this->initializer3ec81->__invoke($valueHolder65c07, $this, 'remove', array('entity' => $entity), $this->initializer3ec81) || 1) && $this->valueHolder65c07 = $valueHolder65c07;

        return $this->valueHolder65c07->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer3ec81 && ($this->initializer3ec81->__invoke($valueHolder65c07, $this, 'refresh', array('entity' => $entity), $this->initializer3ec81) || 1) && $this->valueHolder65c07 = $valueHolder65c07;

        return $this->valueHolder65c07->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer3ec81 && ($this->initializer3ec81->__invoke($valueHolder65c07, $this, 'detach', array('entity' => $entity), $this->initializer3ec81) || 1) && $this->valueHolder65c07 = $valueHolder65c07;

        return $this->valueHolder65c07->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer3ec81 && ($this->initializer3ec81->__invoke($valueHolder65c07, $this, 'merge', array('entity' => $entity), $this->initializer3ec81) || 1) && $this->valueHolder65c07 = $valueHolder65c07;

        return $this->valueHolder65c07->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer3ec81 && ($this->initializer3ec81->__invoke($valueHolder65c07, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer3ec81) || 1) && $this->valueHolder65c07 = $valueHolder65c07;

        return $this->valueHolder65c07->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer3ec81 && ($this->initializer3ec81->__invoke($valueHolder65c07, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer3ec81) || 1) && $this->valueHolder65c07 = $valueHolder65c07;

        return $this->valueHolder65c07->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer3ec81 && ($this->initializer3ec81->__invoke($valueHolder65c07, $this, 'getRepository', array('entityName' => $entityName), $this->initializer3ec81) || 1) && $this->valueHolder65c07 = $valueHolder65c07;

        return $this->valueHolder65c07->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer3ec81 && ($this->initializer3ec81->__invoke($valueHolder65c07, $this, 'contains', array('entity' => $entity), $this->initializer3ec81) || 1) && $this->valueHolder65c07 = $valueHolder65c07;

        return $this->valueHolder65c07->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer3ec81 && ($this->initializer3ec81->__invoke($valueHolder65c07, $this, 'getEventManager', array(), $this->initializer3ec81) || 1) && $this->valueHolder65c07 = $valueHolder65c07;

        return $this->valueHolder65c07->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer3ec81 && ($this->initializer3ec81->__invoke($valueHolder65c07, $this, 'getConfiguration', array(), $this->initializer3ec81) || 1) && $this->valueHolder65c07 = $valueHolder65c07;

        return $this->valueHolder65c07->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer3ec81 && ($this->initializer3ec81->__invoke($valueHolder65c07, $this, 'isOpen', array(), $this->initializer3ec81) || 1) && $this->valueHolder65c07 = $valueHolder65c07;

        return $this->valueHolder65c07->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer3ec81 && ($this->initializer3ec81->__invoke($valueHolder65c07, $this, 'getUnitOfWork', array(), $this->initializer3ec81) || 1) && $this->valueHolder65c07 = $valueHolder65c07;

        return $this->valueHolder65c07->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer3ec81 && ($this->initializer3ec81->__invoke($valueHolder65c07, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer3ec81) || 1) && $this->valueHolder65c07 = $valueHolder65c07;

        return $this->valueHolder65c07->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer3ec81 && ($this->initializer3ec81->__invoke($valueHolder65c07, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer3ec81) || 1) && $this->valueHolder65c07 = $valueHolder65c07;

        return $this->valueHolder65c07->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer3ec81 && ($this->initializer3ec81->__invoke($valueHolder65c07, $this, 'getProxyFactory', array(), $this->initializer3ec81) || 1) && $this->valueHolder65c07 = $valueHolder65c07;

        return $this->valueHolder65c07->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer3ec81 && ($this->initializer3ec81->__invoke($valueHolder65c07, $this, 'initializeObject', array('obj' => $obj), $this->initializer3ec81) || 1) && $this->valueHolder65c07 = $valueHolder65c07;

        return $this->valueHolder65c07->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer3ec81 && ($this->initializer3ec81->__invoke($valueHolder65c07, $this, 'getFilters', array(), $this->initializer3ec81) || 1) && $this->valueHolder65c07 = $valueHolder65c07;

        return $this->valueHolder65c07->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer3ec81 && ($this->initializer3ec81->__invoke($valueHolder65c07, $this, 'isFiltersStateClean', array(), $this->initializer3ec81) || 1) && $this->valueHolder65c07 = $valueHolder65c07;

        return $this->valueHolder65c07->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer3ec81 && ($this->initializer3ec81->__invoke($valueHolder65c07, $this, 'hasFilters', array(), $this->initializer3ec81) || 1) && $this->valueHolder65c07 = $valueHolder65c07;

        return $this->valueHolder65c07->hasFilters();
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

        $instance->initializer3ec81 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder65c07) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder65c07 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder65c07->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer3ec81 && ($this->initializer3ec81->__invoke($valueHolder65c07, $this, '__get', ['name' => $name], $this->initializer3ec81) || 1) && $this->valueHolder65c07 = $valueHolder65c07;

        if (isset(self::$publicProperties93302[$name])) {
            return $this->valueHolder65c07->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder65c07;

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

        $targetObject = $this->valueHolder65c07;
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
        $this->initializer3ec81 && ($this->initializer3ec81->__invoke($valueHolder65c07, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer3ec81) || 1) && $this->valueHolder65c07 = $valueHolder65c07;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder65c07;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder65c07;
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
        $this->initializer3ec81 && ($this->initializer3ec81->__invoke($valueHolder65c07, $this, '__isset', array('name' => $name), $this->initializer3ec81) || 1) && $this->valueHolder65c07 = $valueHolder65c07;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder65c07;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder65c07;
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
        $this->initializer3ec81 && ($this->initializer3ec81->__invoke($valueHolder65c07, $this, '__unset', array('name' => $name), $this->initializer3ec81) || 1) && $this->valueHolder65c07 = $valueHolder65c07;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder65c07;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder65c07;
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
        $this->initializer3ec81 && ($this->initializer3ec81->__invoke($valueHolder65c07, $this, '__clone', array(), $this->initializer3ec81) || 1) && $this->valueHolder65c07 = $valueHolder65c07;

        $this->valueHolder65c07 = clone $this->valueHolder65c07;
    }

    public function __sleep()
    {
        $this->initializer3ec81 && ($this->initializer3ec81->__invoke($valueHolder65c07, $this, '__sleep', array(), $this->initializer3ec81) || 1) && $this->valueHolder65c07 = $valueHolder65c07;

        return array('valueHolder65c07');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer3ec81 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer3ec81;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer3ec81 && ($this->initializer3ec81->__invoke($valueHolder65c07, $this, 'initializeProxy', array(), $this->initializer3ec81) || 1) && $this->valueHolder65c07 = $valueHolder65c07;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder65c07;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder65c07;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
