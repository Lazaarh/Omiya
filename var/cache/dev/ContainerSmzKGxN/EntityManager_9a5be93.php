<?php

namespace ContainerSmzKGxN;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder72cda = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializere77fd = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties00e5c = [
        
    ];

    public function getConnection()
    {
        $this->initializere77fd && ($this->initializere77fd->__invoke($valueHolder72cda, $this, 'getConnection', array(), $this->initializere77fd) || 1) && $this->valueHolder72cda = $valueHolder72cda;

        return $this->valueHolder72cda->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializere77fd && ($this->initializere77fd->__invoke($valueHolder72cda, $this, 'getMetadataFactory', array(), $this->initializere77fd) || 1) && $this->valueHolder72cda = $valueHolder72cda;

        return $this->valueHolder72cda->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializere77fd && ($this->initializere77fd->__invoke($valueHolder72cda, $this, 'getExpressionBuilder', array(), $this->initializere77fd) || 1) && $this->valueHolder72cda = $valueHolder72cda;

        return $this->valueHolder72cda->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializere77fd && ($this->initializere77fd->__invoke($valueHolder72cda, $this, 'beginTransaction', array(), $this->initializere77fd) || 1) && $this->valueHolder72cda = $valueHolder72cda;

        return $this->valueHolder72cda->beginTransaction();
    }

    public function getCache()
    {
        $this->initializere77fd && ($this->initializere77fd->__invoke($valueHolder72cda, $this, 'getCache', array(), $this->initializere77fd) || 1) && $this->valueHolder72cda = $valueHolder72cda;

        return $this->valueHolder72cda->getCache();
    }

    public function transactional($func)
    {
        $this->initializere77fd && ($this->initializere77fd->__invoke($valueHolder72cda, $this, 'transactional', array('func' => $func), $this->initializere77fd) || 1) && $this->valueHolder72cda = $valueHolder72cda;

        return $this->valueHolder72cda->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializere77fd && ($this->initializere77fd->__invoke($valueHolder72cda, $this, 'wrapInTransaction', array('func' => $func), $this->initializere77fd) || 1) && $this->valueHolder72cda = $valueHolder72cda;

        return $this->valueHolder72cda->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializere77fd && ($this->initializere77fd->__invoke($valueHolder72cda, $this, 'commit', array(), $this->initializere77fd) || 1) && $this->valueHolder72cda = $valueHolder72cda;

        return $this->valueHolder72cda->commit();
    }

    public function rollback()
    {
        $this->initializere77fd && ($this->initializere77fd->__invoke($valueHolder72cda, $this, 'rollback', array(), $this->initializere77fd) || 1) && $this->valueHolder72cda = $valueHolder72cda;

        return $this->valueHolder72cda->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializere77fd && ($this->initializere77fd->__invoke($valueHolder72cda, $this, 'getClassMetadata', array('className' => $className), $this->initializere77fd) || 1) && $this->valueHolder72cda = $valueHolder72cda;

        return $this->valueHolder72cda->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializere77fd && ($this->initializere77fd->__invoke($valueHolder72cda, $this, 'createQuery', array('dql' => $dql), $this->initializere77fd) || 1) && $this->valueHolder72cda = $valueHolder72cda;

        return $this->valueHolder72cda->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializere77fd && ($this->initializere77fd->__invoke($valueHolder72cda, $this, 'createNamedQuery', array('name' => $name), $this->initializere77fd) || 1) && $this->valueHolder72cda = $valueHolder72cda;

        return $this->valueHolder72cda->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializere77fd && ($this->initializere77fd->__invoke($valueHolder72cda, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializere77fd) || 1) && $this->valueHolder72cda = $valueHolder72cda;

        return $this->valueHolder72cda->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializere77fd && ($this->initializere77fd->__invoke($valueHolder72cda, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializere77fd) || 1) && $this->valueHolder72cda = $valueHolder72cda;

        return $this->valueHolder72cda->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializere77fd && ($this->initializere77fd->__invoke($valueHolder72cda, $this, 'createQueryBuilder', array(), $this->initializere77fd) || 1) && $this->valueHolder72cda = $valueHolder72cda;

        return $this->valueHolder72cda->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializere77fd && ($this->initializere77fd->__invoke($valueHolder72cda, $this, 'flush', array('entity' => $entity), $this->initializere77fd) || 1) && $this->valueHolder72cda = $valueHolder72cda;

        return $this->valueHolder72cda->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializere77fd && ($this->initializere77fd->__invoke($valueHolder72cda, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializere77fd) || 1) && $this->valueHolder72cda = $valueHolder72cda;

        return $this->valueHolder72cda->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializere77fd && ($this->initializere77fd->__invoke($valueHolder72cda, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializere77fd) || 1) && $this->valueHolder72cda = $valueHolder72cda;

        return $this->valueHolder72cda->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializere77fd && ($this->initializere77fd->__invoke($valueHolder72cda, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializere77fd) || 1) && $this->valueHolder72cda = $valueHolder72cda;

        return $this->valueHolder72cda->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializere77fd && ($this->initializere77fd->__invoke($valueHolder72cda, $this, 'clear', array('entityName' => $entityName), $this->initializere77fd) || 1) && $this->valueHolder72cda = $valueHolder72cda;

        return $this->valueHolder72cda->clear($entityName);
    }

    public function close()
    {
        $this->initializere77fd && ($this->initializere77fd->__invoke($valueHolder72cda, $this, 'close', array(), $this->initializere77fd) || 1) && $this->valueHolder72cda = $valueHolder72cda;

        return $this->valueHolder72cda->close();
    }

    public function persist($entity)
    {
        $this->initializere77fd && ($this->initializere77fd->__invoke($valueHolder72cda, $this, 'persist', array('entity' => $entity), $this->initializere77fd) || 1) && $this->valueHolder72cda = $valueHolder72cda;

        return $this->valueHolder72cda->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializere77fd && ($this->initializere77fd->__invoke($valueHolder72cda, $this, 'remove', array('entity' => $entity), $this->initializere77fd) || 1) && $this->valueHolder72cda = $valueHolder72cda;

        return $this->valueHolder72cda->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializere77fd && ($this->initializere77fd->__invoke($valueHolder72cda, $this, 'refresh', array('entity' => $entity), $this->initializere77fd) || 1) && $this->valueHolder72cda = $valueHolder72cda;

        return $this->valueHolder72cda->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializere77fd && ($this->initializere77fd->__invoke($valueHolder72cda, $this, 'detach', array('entity' => $entity), $this->initializere77fd) || 1) && $this->valueHolder72cda = $valueHolder72cda;

        return $this->valueHolder72cda->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializere77fd && ($this->initializere77fd->__invoke($valueHolder72cda, $this, 'merge', array('entity' => $entity), $this->initializere77fd) || 1) && $this->valueHolder72cda = $valueHolder72cda;

        return $this->valueHolder72cda->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializere77fd && ($this->initializere77fd->__invoke($valueHolder72cda, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializere77fd) || 1) && $this->valueHolder72cda = $valueHolder72cda;

        return $this->valueHolder72cda->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializere77fd && ($this->initializere77fd->__invoke($valueHolder72cda, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializere77fd) || 1) && $this->valueHolder72cda = $valueHolder72cda;

        return $this->valueHolder72cda->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializere77fd && ($this->initializere77fd->__invoke($valueHolder72cda, $this, 'getRepository', array('entityName' => $entityName), $this->initializere77fd) || 1) && $this->valueHolder72cda = $valueHolder72cda;

        return $this->valueHolder72cda->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializere77fd && ($this->initializere77fd->__invoke($valueHolder72cda, $this, 'contains', array('entity' => $entity), $this->initializere77fd) || 1) && $this->valueHolder72cda = $valueHolder72cda;

        return $this->valueHolder72cda->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializere77fd && ($this->initializere77fd->__invoke($valueHolder72cda, $this, 'getEventManager', array(), $this->initializere77fd) || 1) && $this->valueHolder72cda = $valueHolder72cda;

        return $this->valueHolder72cda->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializere77fd && ($this->initializere77fd->__invoke($valueHolder72cda, $this, 'getConfiguration', array(), $this->initializere77fd) || 1) && $this->valueHolder72cda = $valueHolder72cda;

        return $this->valueHolder72cda->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializere77fd && ($this->initializere77fd->__invoke($valueHolder72cda, $this, 'isOpen', array(), $this->initializere77fd) || 1) && $this->valueHolder72cda = $valueHolder72cda;

        return $this->valueHolder72cda->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializere77fd && ($this->initializere77fd->__invoke($valueHolder72cda, $this, 'getUnitOfWork', array(), $this->initializere77fd) || 1) && $this->valueHolder72cda = $valueHolder72cda;

        return $this->valueHolder72cda->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializere77fd && ($this->initializere77fd->__invoke($valueHolder72cda, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializere77fd) || 1) && $this->valueHolder72cda = $valueHolder72cda;

        return $this->valueHolder72cda->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializere77fd && ($this->initializere77fd->__invoke($valueHolder72cda, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializere77fd) || 1) && $this->valueHolder72cda = $valueHolder72cda;

        return $this->valueHolder72cda->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializere77fd && ($this->initializere77fd->__invoke($valueHolder72cda, $this, 'getProxyFactory', array(), $this->initializere77fd) || 1) && $this->valueHolder72cda = $valueHolder72cda;

        return $this->valueHolder72cda->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializere77fd && ($this->initializere77fd->__invoke($valueHolder72cda, $this, 'initializeObject', array('obj' => $obj), $this->initializere77fd) || 1) && $this->valueHolder72cda = $valueHolder72cda;

        return $this->valueHolder72cda->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializere77fd && ($this->initializere77fd->__invoke($valueHolder72cda, $this, 'getFilters', array(), $this->initializere77fd) || 1) && $this->valueHolder72cda = $valueHolder72cda;

        return $this->valueHolder72cda->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializere77fd && ($this->initializere77fd->__invoke($valueHolder72cda, $this, 'isFiltersStateClean', array(), $this->initializere77fd) || 1) && $this->valueHolder72cda = $valueHolder72cda;

        return $this->valueHolder72cda->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializere77fd && ($this->initializere77fd->__invoke($valueHolder72cda, $this, 'hasFilters', array(), $this->initializere77fd) || 1) && $this->valueHolder72cda = $valueHolder72cda;

        return $this->valueHolder72cda->hasFilters();
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

        $instance->initializere77fd = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder72cda) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder72cda = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder72cda->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializere77fd && ($this->initializere77fd->__invoke($valueHolder72cda, $this, '__get', ['name' => $name], $this->initializere77fd) || 1) && $this->valueHolder72cda = $valueHolder72cda;

        if (isset(self::$publicProperties00e5c[$name])) {
            return $this->valueHolder72cda->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder72cda;

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

        $targetObject = $this->valueHolder72cda;
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
        $this->initializere77fd && ($this->initializere77fd->__invoke($valueHolder72cda, $this, '__set', array('name' => $name, 'value' => $value), $this->initializere77fd) || 1) && $this->valueHolder72cda = $valueHolder72cda;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder72cda;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder72cda;
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
        $this->initializere77fd && ($this->initializere77fd->__invoke($valueHolder72cda, $this, '__isset', array('name' => $name), $this->initializere77fd) || 1) && $this->valueHolder72cda = $valueHolder72cda;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder72cda;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder72cda;
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
        $this->initializere77fd && ($this->initializere77fd->__invoke($valueHolder72cda, $this, '__unset', array('name' => $name), $this->initializere77fd) || 1) && $this->valueHolder72cda = $valueHolder72cda;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder72cda;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder72cda;
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
        $this->initializere77fd && ($this->initializere77fd->__invoke($valueHolder72cda, $this, '__clone', array(), $this->initializere77fd) || 1) && $this->valueHolder72cda = $valueHolder72cda;

        $this->valueHolder72cda = clone $this->valueHolder72cda;
    }

    public function __sleep()
    {
        $this->initializere77fd && ($this->initializere77fd->__invoke($valueHolder72cda, $this, '__sleep', array(), $this->initializere77fd) || 1) && $this->valueHolder72cda = $valueHolder72cda;

        return array('valueHolder72cda');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializere77fd = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializere77fd;
    }

    public function initializeProxy() : bool
    {
        return $this->initializere77fd && ($this->initializere77fd->__invoke($valueHolder72cda, $this, 'initializeProxy', array(), $this->initializere77fd) || 1) && $this->valueHolder72cda = $valueHolder72cda;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder72cda;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder72cda;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
