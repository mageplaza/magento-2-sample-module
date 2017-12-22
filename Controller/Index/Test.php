<?php
namespace Mageplaza\HelloWorld\Controller\Index;

class Test extends \Magento\Framework\App\Action\Action
{

	public function execute()
	{
		echo "Hello World";
		exit;
	}
}