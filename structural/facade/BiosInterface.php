<?php

interface BiosInterface{
	public function execute();
	public function waitForKeyPress();
	public function lanuch(OSInterface $os);
	public function powerDown();
}