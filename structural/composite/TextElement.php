<?php

namespace DesignPatterns\Structural\Composite;

abstract class FormElement
{
	abstract public function render($indent = 0);
}