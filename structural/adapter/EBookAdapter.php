<?php

namespace DesignPatterns\Structural\Adapter;

class EBookAdapter implements PaperBookInterface
{
	protected $eBook;

	public function __construct(EBookInterface $eBook)
	{
		$this->eBook = $eBook;
	}

	public function open()
	{
		$this->eBook->pressStart();
	}
	public function turnPage()
	{
		$this->eBook->pressNext();
	}
}