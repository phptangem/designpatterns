<?php

namespace DesignPatterns\Behavioral\ChainOfResponsibilities\Responsible;

use DesignPatterns\Behavioral\ChainOfResponsibilities\Handler;
use DesignPatterns\Behavioral\ChainOfResponsibilities\Request;

class FastStorage extends Handler{
	protected $data = array();

	public function __construct($data = array()){
		$this->data = $data;
	}

	protected function processing(Request $req){
		if('get' === $req->verb){
			if(array_key_exists($req->key, $this->data)){
				$req->response = $this->data[$req->key];
				return true;
			}
		}

		return false;
	}
}