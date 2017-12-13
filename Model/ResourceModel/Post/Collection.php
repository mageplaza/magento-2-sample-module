<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Mageplaza\HelloWorld\Model\ResourceModel\Post;

/**
 * Posts Collection
 *
 * @author      Magento Core Team <core@magentocommerce.com>
 */
class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    /**
     * Initialize resource collection
     *
     * @return void
     */
    public function _construct()
    {
		$this->_init('Mageplaza\HelloWorld\Model\Post', 'Mageplaza\HelloWorld\Model\ResourceModel\Post');
    }
}
