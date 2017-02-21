<?php

namespace DesignPatterns\Behavioral\Observer;

class User implements \SplSubject
{
	protected $data = array();
	protected $observers = new \SplObjectStorage();

	public function __construct()
	{
		$this->observers = new \SplObjectStorage();
	}
	//附加观察者
	public function attach(\SplObserver $observer)
	{
		$this->observers->attach($observer);
	}
	//取消观察者
	public function detach(\SplObserver $observer)
	{
		$this->observers->detach($observer);
	}
	//通知观察者方法
	public function notify()
	{
		foreach ($this->observers as $observer) {
            $observer->update($this);
        }
	}
	public function __set($name, $value)
    {
        $this->data[$name] = $value;

        // 通知观察者用户被改变
        $this->notify();
    }
}