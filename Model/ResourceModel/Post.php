<?php
/**
 * Copyright © 2015 Mageplaza. All rights reserved.
 */
namespace Mageplaza\HelloWorld\Model\ResourceModel;

/**
 * Post resource
 */
class Post extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    /**
     * Initialize resource
     *
     * @return void
     */
    public function _construct()
    {
        $this->_init('helloworld_post', 'id');
    }

  
}
