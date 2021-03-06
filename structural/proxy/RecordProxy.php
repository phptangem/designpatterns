<?php

namespace DesignPatterns\Structural\Proxy;

class RecordProxy extends Record{
	protected $isDirty = false;
	protected $isInitialized = false;

	public function __construct($data){
		parent::__construct($data);

		if(null !== $data){
			$this->isInitialized = true;
            $this->isDirty = true;
		}
	}
	public function __set($name, $value){
        $this->isDirty = true;
        parent::__set($name, $value);
    }
}