<?php

// Generated by Haxe 3.4.4
class sys_db_Object {
	public function __construct() {
		if(!php_Boot::$skip_constructor) {
		$GLOBALS['%s']->push("sys.db.Object::new");
		$__hx__spos = $GLOBALS['%s']->length;
		if($this->_manager === null) {
			$this->_manager = $this->__getManager();
		}
		$GLOBALS['%s']->pop();
	}}
	public $_lock;
	public $_manager;
	public $__cache__;
	public function __getManager() {
		$GLOBALS['%s']->push("sys.db.Object::__getManager");
		$__hx__spos = $GLOBALS['%s']->length;
		$cls = Type::getClass($this);
		{
			$tmp = _hx_field($cls, "manager");
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	public function insert() {
		$GLOBALS['%s']->push("sys.db.Object::insert");
		$__hx__spos = $GLOBALS['%s']->length;
		$this->_manager->doInsert($this);
		$GLOBALS['%s']->pop();
	}
	public function update() {
		$GLOBALS['%s']->push("sys.db.Object::update");
		$__hx__spos = $GLOBALS['%s']->length;
		$this->_manager->doUpdate($this);
		$GLOBALS['%s']->pop();
	}
	public function lock() {
		$GLOBALS['%s']->push("sys.db.Object::lock");
		$__hx__spos = $GLOBALS['%s']->length;
		$this->_manager->doLock($this);
		$GLOBALS['%s']->pop();
	}
	public function delete() {
		$GLOBALS['%s']->push("sys.db.Object::delete");
		$__hx__spos = $GLOBALS['%s']->length;
		$this->_manager->doDelete($this);
		$GLOBALS['%s']->pop();
	}
	public function isLocked() {
		$GLOBALS['%s']->push("sys.db.Object::isLocked");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = $this->_lock;
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	public function toString() {
		$GLOBALS['%s']->push("sys.db.Object::toString");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = $this->_manager->objectToString($this);
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	public function __call($m, $a) {
		if(isset($this->$m) && is_callable($this->$m))
			return call_user_func_array($this->$m, $a);
		else if(isset($this->__dynamics[$m]) && is_callable($this->__dynamics[$m]))
			return call_user_func_array($this->__dynamics[$m], $a);
		else if('toString' == $m)
			return $this->__toString();
		else
			throw new HException('Unable to call <'.$m.'>');
	}
	function __toString() { return $this->toString(); }
}
