<?php

// Generated by Haxe 3.4.4
class sys_db_Sqlite {
	public function __construct(){}
	static function open($file) {
		$GLOBALS['%s']->push("sys.db.Sqlite::open");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = php_db_PDO::open("sqlite:" . _hx_string_or_null($file), null, null, null);
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	function __toString() { return 'sys.db.Sqlite'; }
}