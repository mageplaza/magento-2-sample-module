<?php
/**
 * Copyright © 2015 Mageplaza . All rights reserved.
 * 
 */
namespace Mageplaza\Helloworld\Block;

/**
 * Abstract product block context
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 */
class Context extends \Magento\Framework\View\Element\Template\Context
{
    /**
     * @var \Mageplaza\Helloworld\Helper\Data
     */
    protected $_devToolHelper;

    /**
     * @var \Magento\Framework\Registry
     */
    protected $registry;
	
	/**
     * @var \Mageplaza\Helloworld\Model\Config
     */
    protected $_config;
	
	/**
     * @var \Magento\Framework\ObjectManagerInterface
     */
    protected $_objectManager;
	
	/**
     * @var \Magento\Framework\UrlFactory
     */
    protected $_urlFactory;
	
	

    /**
	 * @param \Magento\Framework\App\RequestInterface $request
     * @param \Magento\Framework\View\LayoutInterface $layout
     * @param \Magento\Framework\Event\ManagerInterface $eventManager
     * @param \Magento\Framework\UrlInterface $urlBuilder
     * @param \Magento\Framework\App\CacheInterface $cache
     * @param \Magento\Framework\View\DesignInterface $design
     * @param \Magento\Framework\Session\SessionManagerInterface $session
     * @param \Magento\Framework\Session\SidResolverInterface $sidResolver
     * @param \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig
     * @param \Magento\Framework\View\Asset\Repository $assetRepo
     * @param \Magento\Framework\View\ConfigInterface $viewConfig
     * @param \Magento\Framework\App\Cache\StateInterface $cacheState
     * @param \Psr\Log\LoggerInterface $logger
     * @param \Magento\Framework\Escaper $escaper
     * @param \Magento\Framework\Filter\FilterManager $filterManager
     * @param \Magento\Framework\Stdlib\DateTime\TimezoneInterface $localeDate
     * @param \Magento\Framework\Translate\Inline\StateInterface $inlineTranslation
     * @param \Magento\Framework\Filesystem $filesystem
     * @param \Magento\Framework\View\FileSystem $viewFileSystem
     * @param \Magento\Framework\View\TemplateEnginePool $enginePool
     * @param \Magento\Framework\App\State $appState
     * @param \Magento\Store\Model\StoreManagerInterface $storeManager
     * @param \Magento\Framework\View\Page\Config $pageConfig
     * @param \Magento\Framework\View\Element\Template\File\Resolver $resolver
     * @param \Magento\Framework\View\Element\Template\File\Validator $validator
     * @param \Mageplaza\Helloworld\Helper\Data $devToolHelper
     * @param \Magento\Framework\Registry $registry
	 * @param \Mageplaza\Helloworld\Model\Config $config
	 * @param \Magento\Framework\ObjectManagerInterface
	 * @param \Magento\Framework\UrlFactory
     * @SuppressWarnings(PHPMD.ExcessiveParameterList)
     */
    public function __construct(
		\Magento\Framework\App\RequestInterface $request,
        \Magento\Framework\View\LayoutInterface $layout,
        \Magento\Framework\Event\ManagerInterface $eventManager,
        \Magento\Framework\UrlInterface $urlBuilder,
        \Magento\Framework\App\CacheInterface $cache,
        \Magento\Framework\View\DesignInterface $design,
        \Magento\Framework\Session\SessionManagerInterface $session,
        \Magento\Framework\Session\SidResolverInterface $sidResolver,
        \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig,
        \Magento\Framework\View\Asset\Repository $assetRepo,
        \Magento\Framework\View\ConfigInterface $viewConfig,
        \Magento\Framework\App\Cache\StateInterface $cacheState,
        \Psr\Log\LoggerInterface $logger,
        \Magento\Framework\Escaper $escaper,
        \Magento\Framework\Filter\FilterManager $filterManager,
        \Magento\Framework\Stdlib\DateTime\TimezoneInterface $localeDate,
        \Magento\Framework\Translate\Inline\StateInterface $inlineTranslation,
        \Magento\Framework\Filesystem $filesystem,
        \Magento\Framework\View\FileSystem $viewFileSystem,
        \Magento\Framework\View\TemplateEnginePool $enginePool,
        \Magento\Framework\App\State $appState,
        \Magento\Store\Model\StoreManagerInterface $storeManager,
        \Magento\Framework\View\Page\Config $pageConfig,
        \Magento\Framework\View\Element\Template\File\Resolver $resolver,
        \Magento\Framework\View\Element\Template\File\Validator $validator,
        \Mageplaza\Helloworld\Helper\Data $devToolHelper,
        \Magento\Framework\Registry $registry,
		\Mageplaza\Helloworld\Model\Config $config,
		\Magento\Framework\ObjectManagerInterface $objectManager,
		\Magento\Framework\UrlFactory $urlFactory
    ) {
        $this->_devToolHelper = $devToolHelper;
        $this->registry = $registry;
		$this->_config = $config;
		$this->_objectManager=$objectManager;
		$this->_urlFactory=$urlFactory;
       parent::__construct(
            $request,
            $layout,
            $eventManager,
            $urlBuilder,
            $cache,
            $design,
            $session,
            $sidResolver,
            $scopeConfig,
            $assetRepo,
            $viewConfig,
            $cacheState,
            $logger,
            $escaper,
            $filterManager,
            $localeDate,
            $inlineTranslation,
            $filesystem,
            $viewFileSystem,
            $enginePool,
            $appState,
            $storeManager,
            $pageConfig,
            $resolver,
            $validator
        );
    }

    /**
	 * Function for getting developer helper object
     * @return \Mageplaza\Helloworld\Helper\Data
     */
    public function getHelloworldHelper()
    {
        return $this->_devToolHelper;
    }


    /**
	 * Function for getting registry object
     * @return \Magento\Framework\Registry
     */
    public function getRegistry()
    {
        return $this->registry;
    }
	
	/**
	 * Function for getting helloworld model config object 
     * @return \Mageplaza\Helloworld\Model\Config
     */
	public function getConfig(){
		return $this->_config;
	}
	
	/**
	 * Function for getting object manager object 
     * @return \Magento\Framework\ObjectManagerInterface
     */
	public function getObjectManager(){
		return $this->_objectManager;
	}
	
	/**
	 * Function for getting UrlFactory object 
     * @return \Magento\Framework\UrlFactory
     */
	public function getUrlFactory(){
		return $this->_urlFactory;
	}

}
