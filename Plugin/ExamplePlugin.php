<?php

namespace Mageplaza\HelloWorld\Plugin;

class ExamplePlugin
{

	public function beforeSetTitle(\Mageplaza\HelloWorld\Controller\Index\Example $subject, $title)
	{
		$title = $title . " to ";
		echo __METHOD__ . "</br>";

		return [$title];
	}


	public function afterGetTitle(\Mageplaza\HelloWorld\Controller\Index\Example $subject, $result)
	{

		echo __METHOD__ . "</br>";

		return '<h1>' . $result . 'Mageplaza.com' . '</h1>';

	}


	public function aroundGetTitle(\Mageplaza\HelloWorld\Controller\Index\Example $subject, callable $proceed)
	{

		echo __METHOD__ . " - Before proceed() </br>";
		$result = $proceed();
		echo __METHOD__ . " - After proceed() </br>";


		return $result;
	}

}