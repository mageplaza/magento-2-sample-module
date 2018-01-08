<?php

namespace Mageplaza\HelloWorld\Controller\Index;

class Example extends \Magento\Framework\App\Action\Action
{

	protected $title;

	public function execute()
	{
		$this->setTitle('Welcome');
		echo $this->getTitle();

		exit(0);
	}

	public function setTitle($title)
	{
		echo __METHOD__ . "</br>";

		return $this->title = $title;
	}

	public function getTitle()
	{
		echo __METHOD__ . "</br>";

		return $this->title;
	}
}