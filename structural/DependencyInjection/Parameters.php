<?php

namespace DesignPatterns\Structural\DependencyInjection;

interface Parameters{
	public function get($key);
	public function set($key, $value);
}