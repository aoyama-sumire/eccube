<?php
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'PluginService.php';

class PluginService_e75fd88 extends \Eccube\Service\PluginService implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Eccube\Service\PluginService|null wrapped object, if the proxy is initialized
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

    public function install($path, $source = 0)
    {
        $this->initializer7fe19 && ($this->initializer7fe19->__invoke($valueHolderf4382, $this, 'install', array('path' => $path, 'source' => $source), $this->initializer7fe19) || 1) && $this->valueHolderf4382 = $valueHolderf4382;

        return $this->valueHolderf4382->install($path, $source);
    }

    public function installWithCode($code)
    {
        $this->initializer7fe19 && ($this->initializer7fe19->__invoke($valueHolderf4382, $this, 'installWithCode', array('code' => $code), $this->initializer7fe19) || 1) && $this->valueHolderf4382 = $valueHolderf4382;

        return $this->valueHolderf4382->installWithCode($code);
    }

    public function preInstall()
    {
        $this->initializer7fe19 && ($this->initializer7fe19->__invoke($valueHolderf4382, $this, 'preInstall', array(), $this->initializer7fe19) || 1) && $this->valueHolderf4382 = $valueHolderf4382;

        return $this->valueHolderf4382->preInstall();
    }

    public function postInstall($config, $source)
    {
        $this->initializer7fe19 && ($this->initializer7fe19->__invoke($valueHolderf4382, $this, 'postInstall', array('config' => $config, 'source' => $source), $this->initializer7fe19) || 1) && $this->valueHolderf4382 = $valueHolderf4382;

        return $this->valueHolderf4382->postInstall($config, $source);
    }

    public function generateProxyAndUpdateSchema(\Eccube\Entity\Plugin $plugin, $config, $uninstall = false, $saveMode = true)
    {
        $this->initializer7fe19 && ($this->initializer7fe19->__invoke($valueHolderf4382, $this, 'generateProxyAndUpdateSchema', array('plugin' => $plugin, 'config' => $config, 'uninstall' => $uninstall, 'saveMode' => $saveMode), $this->initializer7fe19) || 1) && $this->valueHolderf4382 = $valueHolderf4382;

        return $this->valueHolderf4382->generateProxyAndUpdateSchema($plugin, $config, $uninstall, $saveMode);
    }

    public function generateProxyAndCallback(callable $callback, \Eccube\Entity\Plugin $plugin, $config, $uninstall = false, $tmpProxyOutputDir = null)
    {
        $this->initializer7fe19 && ($this->initializer7fe19->__invoke($valueHolderf4382, $this, 'generateProxyAndCallback', array('callback' => $callback, 'plugin' => $plugin, 'config' => $config, 'uninstall' => $uninstall, 'tmpProxyOutputDir' => $tmpProxyOutputDir), $this->initializer7fe19) || 1) && $this->valueHolderf4382 = $valueHolderf4382;

        return $this->valueHolderf4382->generateProxyAndCallback($callback, $plugin, $config, $uninstall, $tmpProxyOutputDir);
    }

    public function createTempDir()
    {
        $this->initializer7fe19 && ($this->initializer7fe19->__invoke($valueHolderf4382, $this, 'createTempDir', array(), $this->initializer7fe19) || 1) && $this->valueHolderf4382 = $valueHolderf4382;

        return $this->valueHolderf4382->createTempDir();
    }

    public function deleteDirs($arr)
    {
        $this->initializer7fe19 && ($this->initializer7fe19->__invoke($valueHolderf4382, $this, 'deleteDirs', array('arr' => $arr), $this->initializer7fe19) || 1) && $this->valueHolderf4382 = $valueHolderf4382;

        return $this->valueHolderf4382->deleteDirs($arr);
    }

    public function unpackPluginArchive($archive, $dir)
    {
        $this->initializer7fe19 && ($this->initializer7fe19->__invoke($valueHolderf4382, $this, 'unpackPluginArchive', array('archive' => $archive, 'dir' => $dir), $this->initializer7fe19) || 1) && $this->valueHolderf4382 = $valueHolderf4382;

        return $this->valueHolderf4382->unpackPluginArchive($archive, $dir);
    }

    public function checkPluginArchiveContent($dir, array $config_cache = [])
    {
        $this->initializer7fe19 && ($this->initializer7fe19->__invoke($valueHolderf4382, $this, 'checkPluginArchiveContent', array('dir' => $dir, 'config_cache' => $config_cache), $this->initializer7fe19) || 1) && $this->valueHolderf4382 = $valueHolderf4382;

        return $this->valueHolderf4382->checkPluginArchiveContent($dir, $config_cache);
    }

    public function readConfig($pluginDir)
    {
        $this->initializer7fe19 && ($this->initializer7fe19->__invoke($valueHolderf4382, $this, 'readConfig', array('pluginDir' => $pluginDir), $this->initializer7fe19) || 1) && $this->valueHolderf4382 = $valueHolderf4382;

        return $this->valueHolderf4382->readConfig($pluginDir);
    }

    public function checkSymbolName($string)
    {
        $this->initializer7fe19 && ($this->initializer7fe19->__invoke($valueHolderf4382, $this, 'checkSymbolName', array('string' => $string), $this->initializer7fe19) || 1) && $this->valueHolderf4382 = $valueHolderf4382;

        return $this->valueHolderf4382->checkSymbolName($string);
    }

    public function deleteFile($path)
    {
        $this->initializer7fe19 && ($this->initializer7fe19->__invoke($valueHolderf4382, $this, 'deleteFile', array('path' => $path), $this->initializer7fe19) || 1) && $this->valueHolderf4382 = $valueHolderf4382;

        return $this->valueHolderf4382->deleteFile($path);
    }

    public function checkSamePlugin($code)
    {
        $this->initializer7fe19 && ($this->initializer7fe19->__invoke($valueHolderf4382, $this, 'checkSamePlugin', array('code' => $code), $this->initializer7fe19) || 1) && $this->valueHolderf4382 = $valueHolderf4382;

        return $this->valueHolderf4382->checkSamePlugin($code);
    }

    public function calcPluginDir($code)
    {
        $this->initializer7fe19 && ($this->initializer7fe19->__invoke($valueHolderf4382, $this, 'calcPluginDir', array('code' => $code), $this->initializer7fe19) || 1) && $this->valueHolderf4382 = $valueHolderf4382;

        return $this->valueHolderf4382->calcPluginDir($code);
    }

    public function createPluginDir($d)
    {
        $this->initializer7fe19 && ($this->initializer7fe19->__invoke($valueHolderf4382, $this, 'createPluginDir', array('d' => $d), $this->initializer7fe19) || 1) && $this->valueHolderf4382 = $valueHolderf4382;

        return $this->valueHolderf4382->createPluginDir($d);
    }

    public function registerPlugin($meta, $source = 0)
    {
        $this->initializer7fe19 && ($this->initializer7fe19->__invoke($valueHolderf4382, $this, 'registerPlugin', array('meta' => $meta, 'source' => $source), $this->initializer7fe19) || 1) && $this->valueHolderf4382 = $valueHolderf4382;

        return $this->valueHolderf4382->registerPlugin($meta, $source);
    }

    public function callPluginManagerMethod($meta, $method)
    {
        $this->initializer7fe19 && ($this->initializer7fe19->__invoke($valueHolderf4382, $this, 'callPluginManagerMethod', array('meta' => $meta, 'method' => $method), $this->initializer7fe19) || 1) && $this->valueHolderf4382 = $valueHolderf4382;

        return $this->valueHolderf4382->callPluginManagerMethod($meta, $method);
    }

    public function uninstall(\Eccube\Entity\Plugin $plugin, $force = true)
    {
        $this->initializer7fe19 && ($this->initializer7fe19->__invoke($valueHolderf4382, $this, 'uninstall', array('plugin' => $plugin, 'force' => $force), $this->initializer7fe19) || 1) && $this->valueHolderf4382 = $valueHolderf4382;

        return $this->valueHolderf4382->uninstall($plugin, $force);
    }

    public function unregisterPlugin(\Eccube\Entity\Plugin $p)
    {
        $this->initializer7fe19 && ($this->initializer7fe19->__invoke($valueHolderf4382, $this, 'unregisterPlugin', array('p' => $p), $this->initializer7fe19) || 1) && $this->valueHolderf4382 = $valueHolderf4382;

        return $this->valueHolderf4382->unregisterPlugin($p);
    }

    public function disable(\Eccube\Entity\Plugin $plugin)
    {
        $this->initializer7fe19 && ($this->initializer7fe19->__invoke($valueHolderf4382, $this, 'disable', array('plugin' => $plugin), $this->initializer7fe19) || 1) && $this->valueHolderf4382 = $valueHolderf4382;

        return $this->valueHolderf4382->disable($plugin);
    }

    public function enable(\Eccube\Entity\Plugin $plugin, $enable = true)
    {
        $this->initializer7fe19 && ($this->initializer7fe19->__invoke($valueHolderf4382, $this, 'enable', array('plugin' => $plugin, 'enable' => $enable), $this->initializer7fe19) || 1) && $this->valueHolderf4382 = $valueHolderf4382;

        return $this->valueHolderf4382->enable($plugin, $enable);
    }

    public function update(\Eccube\Entity\Plugin $plugin, $path)
    {
        $this->initializer7fe19 && ($this->initializer7fe19->__invoke($valueHolderf4382, $this, 'update', array('plugin' => $plugin, 'path' => $path), $this->initializer7fe19) || 1) && $this->valueHolderf4382 = $valueHolderf4382;

        return $this->valueHolderf4382->update($plugin, $path);
    }

    public function updatePlugin(\Eccube\Entity\Plugin $plugin, $meta)
    {
        $this->initializer7fe19 && ($this->initializer7fe19->__invoke($valueHolderf4382, $this, 'updatePlugin', array('plugin' => $plugin, 'meta' => $meta), $this->initializer7fe19) || 1) && $this->valueHolderf4382 = $valueHolderf4382;

        return $this->valueHolderf4382->updatePlugin($plugin, $meta);
    }

    public function getPluginRequired($plugin)
    {
        $this->initializer7fe19 && ($this->initializer7fe19->__invoke($valueHolderf4382, $this, 'getPluginRequired', array('plugin' => $plugin), $this->initializer7fe19) || 1) && $this->valueHolderf4382 = $valueHolderf4382;

        return $this->valueHolderf4382->getPluginRequired($plugin);
    }

    public function findDependentPluginNeedDisable($pluginCode)
    {
        $this->initializer7fe19 && ($this->initializer7fe19->__invoke($valueHolderf4382, $this, 'findDependentPluginNeedDisable', array('pluginCode' => $pluginCode), $this->initializer7fe19) || 1) && $this->valueHolderf4382 = $valueHolderf4382;

        return $this->valueHolderf4382->findDependentPluginNeedDisable($pluginCode);
    }

    public function findDependentPlugin($pluginCode, $enableOnly = false)
    {
        $this->initializer7fe19 && ($this->initializer7fe19->__invoke($valueHolderf4382, $this, 'findDependentPlugin', array('pluginCode' => $pluginCode, 'enableOnly' => $enableOnly), $this->initializer7fe19) || 1) && $this->valueHolderf4382 = $valueHolderf4382;

        return $this->valueHolderf4382->findDependentPlugin($pluginCode, $enableOnly);
    }

    public function getDependentByCode($pluginCode, $libraryType = null)
    {
        $this->initializer7fe19 && ($this->initializer7fe19->__invoke($valueHolderf4382, $this, 'getDependentByCode', array('pluginCode' => $pluginCode, 'libraryType' => $libraryType), $this->initializer7fe19) || 1) && $this->valueHolderf4382 = $valueHolderf4382;

        return $this->valueHolderf4382->getDependentByCode($pluginCode, $libraryType);
    }

    public function parseToComposerCommand(array $packages, $getVersion = true)
    {
        $this->initializer7fe19 && ($this->initializer7fe19->__invoke($valueHolderf4382, $this, 'parseToComposerCommand', array('packages' => $packages, 'getVersion' => $getVersion), $this->initializer7fe19) || 1) && $this->valueHolderf4382 = $valueHolderf4382;

        return $this->valueHolderf4382->parseToComposerCommand($packages, $getVersion);
    }

    public function copyAssets($pluginCode)
    {
        $this->initializer7fe19 && ($this->initializer7fe19->__invoke($valueHolderf4382, $this, 'copyAssets', array('pluginCode' => $pluginCode), $this->initializer7fe19) || 1) && $this->valueHolderf4382 = $valueHolderf4382;

        return $this->valueHolderf4382->copyAssets($pluginCode);
    }

    public function removeAssets($pluginCode)
    {
        $this->initializer7fe19 && ($this->initializer7fe19->__invoke($valueHolderf4382, $this, 'removeAssets', array('pluginCode' => $pluginCode), $this->initializer7fe19) || 1) && $this->valueHolderf4382 = $valueHolderf4382;

        return $this->valueHolderf4382->removeAssets($pluginCode);
    }

    public function checkPluginExist($plugins, $pluginCode)
    {
        $this->initializer7fe19 && ($this->initializer7fe19->__invoke($valueHolderf4382, $this, 'checkPluginExist', array('plugins' => $plugins, 'pluginCode' => $pluginCode), $this->initializer7fe19) || 1) && $this->valueHolderf4382 = $valueHolderf4382;

        return $this->valueHolderf4382->checkPluginExist($plugins, $pluginCode);
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

        unset($instance->eccubeConfig, $instance->entityManager, $instance->pluginRepository, $instance->entityProxyService, $instance->schemaService, $instance->composerService, $instance->container, $instance->cacheUtil);

        \Closure::bind(function (\Eccube\Service\PluginService $instance) {
            unset($instance->projectRoot, $instance->environment, $instance->pluginApiService, $instance->systemService, $instance->pluginContext);
        }, $instance, 'Eccube\\Service\\PluginService')->__invoke($instance);

        $instance->initializer7fe19 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\ORM\EntityManagerInterface $entityManager, \Eccube\Repository\PluginRepository $pluginRepository, \Eccube\Service\EntityProxyService $entityProxyService, \Eccube\Service\SchemaService $schemaService, \Eccube\Common\EccubeConfig $eccubeConfig, \Symfony\Component\DependencyInjection\ContainerInterface $container, \Eccube\Util\CacheUtil $cacheUtil, \Eccube\Service\Composer\ComposerServiceInterface $composerService, \Eccube\Service\PluginApiService $pluginApiService, \Eccube\Service\SystemService $systemService, \Eccube\Service\PluginContext $pluginContext)
    {
        static $reflection;

        if (! $this->valueHolderf4382) {
            $reflection = $reflection ?? new \ReflectionClass('Eccube\\Service\\PluginService');
            $this->valueHolderf4382 = $reflection->newInstanceWithoutConstructor();
        unset($this->eccubeConfig, $this->entityManager, $this->pluginRepository, $this->entityProxyService, $this->schemaService, $this->composerService, $this->container, $this->cacheUtil);

        \Closure::bind(function (\Eccube\Service\PluginService $instance) {
            unset($instance->projectRoot, $instance->environment, $instance->pluginApiService, $instance->systemService, $instance->pluginContext);
        }, $this, 'Eccube\\Service\\PluginService')->__invoke($this);

        }

        $this->valueHolderf4382->__construct($entityManager, $pluginRepository, $entityProxyService, $schemaService, $eccubeConfig, $container, $cacheUtil, $composerService, $pluginApiService, $systemService, $pluginContext);
    }

    public function & __get($name)
    {
        $this->initializer7fe19 && ($this->initializer7fe19->__invoke($valueHolderf4382, $this, '__get', ['name' => $name], $this->initializer7fe19) || 1) && $this->valueHolderf4382 = $valueHolderf4382;

        if (isset(self::$publicProperties808f2[$name])) {
            return $this->valueHolderf4382->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\PluginService');

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

        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\PluginService');

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

        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\PluginService');

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

        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\PluginService');

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
        unset($this->eccubeConfig, $this->entityManager, $this->pluginRepository, $this->entityProxyService, $this->schemaService, $this->composerService, $this->container, $this->cacheUtil);

        \Closure::bind(function (\Eccube\Service\PluginService $instance) {
            unset($instance->projectRoot, $instance->environment, $instance->pluginApiService, $instance->systemService, $instance->pluginContext);
        }, $this, 'Eccube\\Service\\PluginService')->__invoke($this);
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
