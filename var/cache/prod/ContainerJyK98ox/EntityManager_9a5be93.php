<?php

namespace ContainerJyK98ox;

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder49cad = null;
    private $initializer9de4e = null;
    private static $publicProperties80724 = [
        
    ];
    public function getConnection()
    {
        $this->initializer9de4e && ($this->initializer9de4e->__invoke($valueHolder49cad, $this, 'getConnection', array(), $this->initializer9de4e) || 1) && $this->valueHolder49cad = $valueHolder49cad;
        return $this->valueHolder49cad->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializer9de4e && ($this->initializer9de4e->__invoke($valueHolder49cad, $this, 'getMetadataFactory', array(), $this->initializer9de4e) || 1) && $this->valueHolder49cad = $valueHolder49cad;
        return $this->valueHolder49cad->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializer9de4e && ($this->initializer9de4e->__invoke($valueHolder49cad, $this, 'getExpressionBuilder', array(), $this->initializer9de4e) || 1) && $this->valueHolder49cad = $valueHolder49cad;
        return $this->valueHolder49cad->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializer9de4e && ($this->initializer9de4e->__invoke($valueHolder49cad, $this, 'beginTransaction', array(), $this->initializer9de4e) || 1) && $this->valueHolder49cad = $valueHolder49cad;
        return $this->valueHolder49cad->beginTransaction();
    }
    public function getCache()
    {
        $this->initializer9de4e && ($this->initializer9de4e->__invoke($valueHolder49cad, $this, 'getCache', array(), $this->initializer9de4e) || 1) && $this->valueHolder49cad = $valueHolder49cad;
        return $this->valueHolder49cad->getCache();
    }
    public function transactional($func)
    {
        $this->initializer9de4e && ($this->initializer9de4e->__invoke($valueHolder49cad, $this, 'transactional', array('func' => $func), $this->initializer9de4e) || 1) && $this->valueHolder49cad = $valueHolder49cad;
        return $this->valueHolder49cad->transactional($func);
    }
    public function commit()
    {
        $this->initializer9de4e && ($this->initializer9de4e->__invoke($valueHolder49cad, $this, 'commit', array(), $this->initializer9de4e) || 1) && $this->valueHolder49cad = $valueHolder49cad;
        return $this->valueHolder49cad->commit();
    }
    public function rollback()
    {
        $this->initializer9de4e && ($this->initializer9de4e->__invoke($valueHolder49cad, $this, 'rollback', array(), $this->initializer9de4e) || 1) && $this->valueHolder49cad = $valueHolder49cad;
        return $this->valueHolder49cad->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializer9de4e && ($this->initializer9de4e->__invoke($valueHolder49cad, $this, 'getClassMetadata', array('className' => $className), $this->initializer9de4e) || 1) && $this->valueHolder49cad = $valueHolder49cad;
        return $this->valueHolder49cad->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializer9de4e && ($this->initializer9de4e->__invoke($valueHolder49cad, $this, 'createQuery', array('dql' => $dql), $this->initializer9de4e) || 1) && $this->valueHolder49cad = $valueHolder49cad;
        return $this->valueHolder49cad->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializer9de4e && ($this->initializer9de4e->__invoke($valueHolder49cad, $this, 'createNamedQuery', array('name' => $name), $this->initializer9de4e) || 1) && $this->valueHolder49cad = $valueHolder49cad;
        return $this->valueHolder49cad->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer9de4e && ($this->initializer9de4e->__invoke($valueHolder49cad, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer9de4e) || 1) && $this->valueHolder49cad = $valueHolder49cad;
        return $this->valueHolder49cad->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializer9de4e && ($this->initializer9de4e->__invoke($valueHolder49cad, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer9de4e) || 1) && $this->valueHolder49cad = $valueHolder49cad;
        return $this->valueHolder49cad->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializer9de4e && ($this->initializer9de4e->__invoke($valueHolder49cad, $this, 'createQueryBuilder', array(), $this->initializer9de4e) || 1) && $this->valueHolder49cad = $valueHolder49cad;
        return $this->valueHolder49cad->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializer9de4e && ($this->initializer9de4e->__invoke($valueHolder49cad, $this, 'flush', array('entity' => $entity), $this->initializer9de4e) || 1) && $this->valueHolder49cad = $valueHolder49cad;
        return $this->valueHolder49cad->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer9de4e && ($this->initializer9de4e->__invoke($valueHolder49cad, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer9de4e) || 1) && $this->valueHolder49cad = $valueHolder49cad;
        return $this->valueHolder49cad->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializer9de4e && ($this->initializer9de4e->__invoke($valueHolder49cad, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer9de4e) || 1) && $this->valueHolder49cad = $valueHolder49cad;
        return $this->valueHolder49cad->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer9de4e && ($this->initializer9de4e->__invoke($valueHolder49cad, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer9de4e) || 1) && $this->valueHolder49cad = $valueHolder49cad;
        return $this->valueHolder49cad->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializer9de4e && ($this->initializer9de4e->__invoke($valueHolder49cad, $this, 'clear', array('entityName' => $entityName), $this->initializer9de4e) || 1) && $this->valueHolder49cad = $valueHolder49cad;
        return $this->valueHolder49cad->clear($entityName);
    }
    public function close()
    {
        $this->initializer9de4e && ($this->initializer9de4e->__invoke($valueHolder49cad, $this, 'close', array(), $this->initializer9de4e) || 1) && $this->valueHolder49cad = $valueHolder49cad;
        return $this->valueHolder49cad->close();
    }
    public function persist($entity)
    {
        $this->initializer9de4e && ($this->initializer9de4e->__invoke($valueHolder49cad, $this, 'persist', array('entity' => $entity), $this->initializer9de4e) || 1) && $this->valueHolder49cad = $valueHolder49cad;
        return $this->valueHolder49cad->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializer9de4e && ($this->initializer9de4e->__invoke($valueHolder49cad, $this, 'remove', array('entity' => $entity), $this->initializer9de4e) || 1) && $this->valueHolder49cad = $valueHolder49cad;
        return $this->valueHolder49cad->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializer9de4e && ($this->initializer9de4e->__invoke($valueHolder49cad, $this, 'refresh', array('entity' => $entity), $this->initializer9de4e) || 1) && $this->valueHolder49cad = $valueHolder49cad;
        return $this->valueHolder49cad->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializer9de4e && ($this->initializer9de4e->__invoke($valueHolder49cad, $this, 'detach', array('entity' => $entity), $this->initializer9de4e) || 1) && $this->valueHolder49cad = $valueHolder49cad;
        return $this->valueHolder49cad->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializer9de4e && ($this->initializer9de4e->__invoke($valueHolder49cad, $this, 'merge', array('entity' => $entity), $this->initializer9de4e) || 1) && $this->valueHolder49cad = $valueHolder49cad;
        return $this->valueHolder49cad->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializer9de4e && ($this->initializer9de4e->__invoke($valueHolder49cad, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer9de4e) || 1) && $this->valueHolder49cad = $valueHolder49cad;
        return $this->valueHolder49cad->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer9de4e && ($this->initializer9de4e->__invoke($valueHolder49cad, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer9de4e) || 1) && $this->valueHolder49cad = $valueHolder49cad;
        return $this->valueHolder49cad->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializer9de4e && ($this->initializer9de4e->__invoke($valueHolder49cad, $this, 'getRepository', array('entityName' => $entityName), $this->initializer9de4e) || 1) && $this->valueHolder49cad = $valueHolder49cad;
        return $this->valueHolder49cad->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializer9de4e && ($this->initializer9de4e->__invoke($valueHolder49cad, $this, 'contains', array('entity' => $entity), $this->initializer9de4e) || 1) && $this->valueHolder49cad = $valueHolder49cad;
        return $this->valueHolder49cad->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializer9de4e && ($this->initializer9de4e->__invoke($valueHolder49cad, $this, 'getEventManager', array(), $this->initializer9de4e) || 1) && $this->valueHolder49cad = $valueHolder49cad;
        return $this->valueHolder49cad->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializer9de4e && ($this->initializer9de4e->__invoke($valueHolder49cad, $this, 'getConfiguration', array(), $this->initializer9de4e) || 1) && $this->valueHolder49cad = $valueHolder49cad;
        return $this->valueHolder49cad->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializer9de4e && ($this->initializer9de4e->__invoke($valueHolder49cad, $this, 'isOpen', array(), $this->initializer9de4e) || 1) && $this->valueHolder49cad = $valueHolder49cad;
        return $this->valueHolder49cad->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializer9de4e && ($this->initializer9de4e->__invoke($valueHolder49cad, $this, 'getUnitOfWork', array(), $this->initializer9de4e) || 1) && $this->valueHolder49cad = $valueHolder49cad;
        return $this->valueHolder49cad->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializer9de4e && ($this->initializer9de4e->__invoke($valueHolder49cad, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer9de4e) || 1) && $this->valueHolder49cad = $valueHolder49cad;
        return $this->valueHolder49cad->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializer9de4e && ($this->initializer9de4e->__invoke($valueHolder49cad, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer9de4e) || 1) && $this->valueHolder49cad = $valueHolder49cad;
        return $this->valueHolder49cad->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializer9de4e && ($this->initializer9de4e->__invoke($valueHolder49cad, $this, 'getProxyFactory', array(), $this->initializer9de4e) || 1) && $this->valueHolder49cad = $valueHolder49cad;
        return $this->valueHolder49cad->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializer9de4e && ($this->initializer9de4e->__invoke($valueHolder49cad, $this, 'initializeObject', array('obj' => $obj), $this->initializer9de4e) || 1) && $this->valueHolder49cad = $valueHolder49cad;
        return $this->valueHolder49cad->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializer9de4e && ($this->initializer9de4e->__invoke($valueHolder49cad, $this, 'getFilters', array(), $this->initializer9de4e) || 1) && $this->valueHolder49cad = $valueHolder49cad;
        return $this->valueHolder49cad->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializer9de4e && ($this->initializer9de4e->__invoke($valueHolder49cad, $this, 'isFiltersStateClean', array(), $this->initializer9de4e) || 1) && $this->valueHolder49cad = $valueHolder49cad;
        return $this->valueHolder49cad->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializer9de4e && ($this->initializer9de4e->__invoke($valueHolder49cad, $this, 'hasFilters', array(), $this->initializer9de4e) || 1) && $this->valueHolder49cad = $valueHolder49cad;
        return $this->valueHolder49cad->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializer9de4e = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolder49cad) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder49cad = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder49cad->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializer9de4e && ($this->initializer9de4e->__invoke($valueHolder49cad, $this, '__get', ['name' => $name], $this->initializer9de4e) || 1) && $this->valueHolder49cad = $valueHolder49cad;
        if (isset(self::$publicProperties80724[$name])) {
            return $this->valueHolder49cad->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
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

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
