<?php

// Generated by Haxe 3.4.4
class Type {
	public function __construct(){}
	static function getClass($o) {
		$GLOBALS['%s']->push("Type::getClass");
		$__hx__spos = $GLOBALS['%s']->length;
		if($o === null) {
			$GLOBALS['%s']->pop();
			return null;
		}
		if(is_array($o)) {
			$tmp = null;
			if(count($o) === 2) {
				$tmp = is_callable($o);
			} else {
				$tmp = false;
			}
			if($tmp) {
				$GLOBALS['%s']->pop();
				return null;
			}
			{
				$tmp2 = _hx_ttype("Array");
				$GLOBALS['%s']->pop();
				return $tmp2;
			}
		}
		if(is_string($o)) {
			if(_hx_is_lambda($o)) {
				$GLOBALS['%s']->pop();
				return null;
			}
			{
				$tmp = _hx_ttype("String");
				$GLOBALS['%s']->pop();
				return $tmp;
			}
		}
		if(!is_object($o)) {
			$GLOBALS['%s']->pop();
			return null;
		}
		$c = get_class($o);
		$tmp1 = null;
		$tmp2 = null;
		if($c !== false) {
			$tmp2 = $c === "_hx_anonymous";
		} else {
			$tmp2 = true;
		}
		if(!$tmp2) {
			$tmp1 = is_subclass_of($c, "enum");
		} else {
			$tmp1 = true;
		}
		if($tmp1) {
			$GLOBALS['%s']->pop();
			return null;
		} else {
			$tmp = _hx_ttype($c);
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	static function getClassName($c) {
		$GLOBALS['%s']->push("Type::getClassName");
		$__hx__spos = $GLOBALS['%s']->length;
		if($c === null) {
			$GLOBALS['%s']->pop();
			return null;
		}
		{
			$tmp = $c->__qname__;
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	static function getEnumName($e) {
		$GLOBALS['%s']->push("Type::getEnumName");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = $e->__qname__;
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	static function resolveClass($name) {
		$GLOBALS['%s']->push("Type::resolveClass");
		$__hx__spos = $GLOBALS['%s']->length;
		$c = _hx_qtype($name);
		if($c instanceof _hx_class || $c instanceof _hx_interface) {
			$GLOBALS['%s']->pop();
			return $c;
		} else {
			$GLOBALS['%s']->pop();
			return null;
		}
		$GLOBALS['%s']->pop();
	}
	static function resolveEnum($name) {
		$GLOBALS['%s']->push("Type::resolveEnum");
		$__hx__spos = $GLOBALS['%s']->length;
		$e = _hx_qtype($name);
		if($e instanceof _hx_enum) {
			$GLOBALS['%s']->pop();
			return $e;
		} else {
			$GLOBALS['%s']->pop();
			return null;
		}
		$GLOBALS['%s']->pop();
	}
	static function createEmptyInstance($cl) {
		$GLOBALS['%s']->push("Type::createEmptyInstance");
		$__hx__spos = $GLOBALS['%s']->length;
		if($cl->__qname__ === "Array") {
			$tmp = (new _hx_array(array()));
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		if($cl->__qname__ === "String") {
			$GLOBALS['%s']->pop();
			return "";
		}
		try {
			php_Boot::$skip_constructor = true;
			$rfl = $cl->__rfl__();
			if($rfl === null) {
				$GLOBALS['%s']->pop();
				return null;
			}
			$m = $rfl->getConstructor();
			$nargs = $m->getNumberOfRequiredParameters();
			$i = null;
			if($nargs > 0) {
				$args = array_fill(0, $m->getNumberOfRequiredParameters(), null);
				$i = $rfl->newInstanceArgs($args);
			} else {
				$i = $rfl->newInstanceArgs(array());
			}
			php_Boot::$skip_constructor = false;
			{
				$GLOBALS['%s']->pop();
				return $i;
			}
		}catch(Exception $__hx__e) {
			$_ex_ = ($__hx__e instanceof HException) && $__hx__e->getCode() == null ? $__hx__e->e : $__hx__e;
			$e = $_ex_;
			{
				$GLOBALS['%e'] = (new _hx_array(array()));
				while($GLOBALS['%s']->length >= $__hx__spos) {
					$GLOBALS['%e']->unshift($GLOBALS['%s']->pop());
				}
				$GLOBALS['%s']->push($GLOBALS['%e'][0]);
				php_Boot::$skip_constructor = false;
				throw new HException("Unable to instantiate " . Std::string($cl));
			}
		}
		$GLOBALS['%s']->pop();
	}
	static function createEnum($e, $constr, $params = null) {
		$GLOBALS['%s']->push("Type::createEnum");
		$__hx__spos = $GLOBALS['%s']->length;
		$f = Reflect::field($e, $constr);
		if($f === null) {
			throw new HException("No such constructor " . _hx_string_or_null($constr));
		}
		if(Reflect::isFunction($f)) {
			if($params === null) {
				throw new HException("Constructor " . _hx_string_or_null($constr) . " need parameters");
			}
			{
				$tmp = Reflect::callMethod($e, $f, $params);
				$GLOBALS['%s']->pop();
				return $tmp;
			}
		}
		$tmp = null;
		if($params !== null) {
			$tmp = $params->length !== 0;
		} else {
			$tmp = false;
		}
		if($tmp) {
			throw new HException("Constructor " . _hx_string_or_null($constr) . " does not need parameters");
		}
		{
			$GLOBALS['%s']->pop();
			return $f;
		}
		$GLOBALS['%s']->pop();
	}
	static function getEnumConstructs($e) {
		$GLOBALS['%s']->push("Type::getEnumConstructs");
		$__hx__spos = $GLOBALS['%s']->length;
		if($e->__tname__ == 'Bool') {
			$tmp = (new _hx_array(array("true", "false")));
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		if($e->__tname__ == 'Void') {
			$tmp = (new _hx_array(array()));
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		{
			$tmp = new _hx_array($e->__constructors);
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	static function typeof($v) {
		$GLOBALS['%s']->push("Type::typeof");
		$__hx__spos = $GLOBALS['%s']->length;
		if($v === null) {
			$tmp = ValueType::$TNull;
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		if(is_array($v)) {
			if(is_callable($v)) {
				$tmp = ValueType::$TFunction;
				$GLOBALS['%s']->pop();
				return $tmp;
			}
			{
				$tmp = ValueType::TClass(_hx_qtype("Array"));
				$GLOBALS['%s']->pop();
				return $tmp;
			}
		}
		if(is_string($v)) {
			if(_hx_is_lambda($v)) {
				$tmp = ValueType::$TFunction;
				$GLOBALS['%s']->pop();
				return $tmp;
			}
			{
				$tmp = ValueType::TClass(_hx_qtype("String"));
				$GLOBALS['%s']->pop();
				return $tmp;
			}
		}
		if(is_bool($v)) {
			$tmp = ValueType::$TBool;
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		if(is_int($v)) {
			$tmp = ValueType::$TInt;
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		if(is_float($v)) {
			$tmp = ValueType::$TFloat;
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		if($v instanceof _hx_anonymous) {
			$tmp = ValueType::$TObject;
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		if($v instanceof _hx_enum) {
			$tmp = ValueType::$TObject;
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		if($v instanceof _hx_class) {
			$tmp = ValueType::$TObject;
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$c = _hx_ttype(get_class($v));
		if($c instanceof _hx_enum) {
			$tmp = ValueType::TEnum($c);
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		if($c instanceof _hx_class) {
			$tmp = ValueType::TClass($c);
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		{
			$tmp = ValueType::$TUnknown;
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	function __toString() { return 'Type'; }
}
