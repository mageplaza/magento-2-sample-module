<?php

namespace Mageplaza\HelloWorld\Setup;

use Magento\Framework\Setup\UpgradeDataInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\ModuleContextInterface;

class UpgradeData implements UpgradeDataInterface
{
	protected $_postFactory;

	public function __construct(\Mageplaza\HelloWorld\Model\PostFactory $postFactory)
	{
		$this->_postFactory = $postFactory;
	}

	public function upgrade(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
	{
		if (version_compare($context->getVersion(), '1.2.0', '<')) {
			$data = [
				'name'         => "Magento 2 Events",
				'post_content' => "This article will talk about Events List in Magento 2. As you know, Magento 2 is using the events driven architecture which will help too much to extend the Magento functionality. We can understand this event as a kind of flag that rises when a specific situation happens. We will use an example module Mageplaza_HelloWorld to exercise this lesson.",
				'url_key'      => '/magento-2-module-development/magento-2-events.html',
				'tags'         => 'magento 2,mageplaza helloworld',
				'status'       => 1
			];
			$post = $this->_postFactory->create();
			$post->addData($data)->save();
		}
	}
}
