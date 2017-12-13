<?php
namespace Mageplaza\HelloWorld\Block\Adminhtml;
class Post extends \Magento\Backend\Block\Widget\Grid\Container
{
    /**
     * Constructor
     *
     * @return void
     */
    protected function _construct()
    {
		
        $this->_controller     = 'adminhtml_post';/*block grid.php directory*/
		$this->_blockGroup     = 'Mageplaza_HelloWorld';
        $this->_headerText     = __('Post');
        $this->_addButtonLabel = __('Add New Entry'); 
        parent::_construct();
		
    }
}
