<?php

namespace DesignPatterns\Structural\Decorator;
class RenderInJson extends Decorator{
	public function renderData(){
		$output = $this->wrapped->renderData();
		return json_encode($output);
	}
}