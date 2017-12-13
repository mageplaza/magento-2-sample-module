<?php
namespace Mageplaza\HelloWorld\Block\Adminhtml\Post\Edit;

class Tabs extends \Magento\Backend\Block\Widget\Tabs
{
    protected function _construct()
    {
		
        parent::_construct();
        $this->setId('checkmodule_post_tabs');
        $this->setDestElementId('edit_form');
        $this->setTitle(__('Post Information'));
    }
}