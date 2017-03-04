<?php

namespace DesignPatterns\Structural\Decorator;

class RenderInXml extends Decorator{
	public function renderData(){
		$output = $this->wrapped->renderData();
		$doc = new \DOMDocument();
		foreach ($output as $key => $val) {
			$doc->appendChild($doc->createElement($key, $val));
		}

		return $doc->saveXML();
	}
}