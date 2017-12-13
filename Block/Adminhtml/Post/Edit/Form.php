<?php
namespace Mageplaza\Helloworld\Block\Adminhtml\Post\Edit;
class Form extends \Magento\Backend\Block\Widget\Form\Generic
{
    /**
     * Customer Service.
     *
     * @var CustomerAccountServiceInterface
     */
    protected $_customerAccountService;

    protected function _prepareForm()
    {
        /** @var \Magento\Framework\Data\Form $form */
        $form = $this->_formFactory->create(
            array(
                'data' => array(
                    'id' => 'edit_form',
                    'action' => $this->getUrl('*/*/save'),
                    'method' => 'post',
                    'enctype' => 'multipart/form-data'
                )
            )
        );
        $form->setUseContainer(true);
        $this->setForm($form);
        return parent::_prepareForm();
    }
}
