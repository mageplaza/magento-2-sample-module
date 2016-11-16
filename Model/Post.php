<?php
/**
 * Mageplaza_HelloWorld extension
 *                     NOTICE OF LICENSE
 * 
 *                     This source file is subject to the Mageplaza License
 *                     that is bundled with this package in the file LICENSE.txt.
 *                     It is also available through the world-wide-web at this URL:
 *                     https://www.mageplaza.com/LICENSE.txt
 * 
 *                     @category  Mageplaza
 *                     @package   Mageplaza_HelloWorld
 *                     @copyright Copyright (c) 2016
 *                     @license   https://www.mageplaza.com/LICENSE.txt
 */
namespace Mageplaza\HelloWorld\Model;

/**
 * @method Post setName($name)
 * @method Post setUrlKey($urlKey)
 * @method Post setPostContent($postContent)
 * @method Post setTags($tags)
 * @method Post setStatus($status)
 * @method Post setFeaturedImage($featuredImage)
 * @method Post setSampleCountrySelection($sampleCountrySelection)
 * @method Post setSampleUploadFile($sampleUploadFile)
 * @method Post setSampleMultiselect($sampleMultiselect)
 * @method mixed getName()
 * @method mixed getUrlKey()
 * @method mixed getPostContent()
 * @method mixed getTags()
 * @method mixed getStatus()
 * @method mixed getFeaturedImage()
 * @method mixed getSampleCountrySelection()
 * @method mixed getSampleUploadFile()
 * @method mixed getSampleMultiselect()
 * @method Post setCreatedAt(\string $createdAt)
 * @method string getCreatedAt()
 * @method Post setUpdatedAt(\string $updatedAt)
 * @method string getUpdatedAt()
 */
class Post extends \Magento\Framework\Model\AbstractModel
{
    /**
     * Cache tag
     * 
     * @var string
     */
    const CACHE_TAG = 'mageplaza_helloworld_post';

    /**
     * Cache tag
     * 
     * @var string
     */
    protected $_cacheTag = 'mageplaza_helloworld_post';

    /**
     * Event prefix
     * 
     * @var string
     */
    protected $_eventPrefix = 'mageplaza_helloworld_post';


    /**
     * Initialize resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Mageplaza\HelloWorld\Model\ResourceModel\Post');
    }

    /**
     * Get identities
     *
     * @return array
     */
    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }

    /**
     * get entity default values
     *
     * @return array
     */
    public function getDefaultValues()
    {
        $values = [];

        return $values;
    }
}
