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
namespace Mageplaza\HelloWorld\Model\Post\Source;

class MultiselectField implements \Magento\Framework\Option\ArrayInterface
{
    const OPTION_1 = 1;
    const OPTION_2 = 2;


    /**
     * to option array
     *
     * @return array
     */
    public function toOptionArray()
    {
        $options = [
            [
                'value' => self::OPTION_1,
                'label' => __('Option 1')
            ],
            [
                'value' => self::OPTION_2,
                'label' => __('Option 2')
            ],
        ];
        return $options;

    }
}
