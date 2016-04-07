<?php

class Main {
	public function __construct() { if(!php_Boot::$skip_constructor) {
		haxe_Log::trace("Example Webapi<br>", _hx_anonymous(array("fileName" => "Main.hx", "lineNumber" => 13, "className" => "Main", "methodName" => "new")));
		$params = php_Web::getParams();
		$name = null;
		if($params->exists("name")) {
			$name = $params->get("name");
		} else {
			$name = "world";
		}
		php_Lib::hprint("Hello " . _hx_string_or_null($name) . "!");
	}}
	static function main() {
		$main = new Main();
	}
	function __toString() { return 'Main'; }
}