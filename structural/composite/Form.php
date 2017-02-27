<?php

namespace DesignPatterns\Structural\Composite;

class Form extends FormElement
{
	protected $elements;
	public function render($indent = 0)
	{
		$formCode = '';
		foreach ($this->elements as $element) {
			$formCode .= $element->render($indent + 1).PHP_EOL;
		}
	}
}