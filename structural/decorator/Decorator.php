<?php

namespace DesignPatterns\Structural\Decorator;

abstract class Decorator implements RendererInterface{
	protected $wrapped;
	public function __construct(RendererInterface $wrappable){
		$this->wrapped = $wrappable;
	}
}