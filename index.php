<?php

/**
 * Spigot
 */

define('START_TIME', microtime(true));
define('DS', DIRECTORY_SEPARATOR);
define('VERSION', '0.1');

define('PATH', dirname(__FILE__) . DS);
define('APP', PATH . 'spigot' . DS);
define('SYS', PATH . 'system' . DS);
define('BASE', substr($_SERVER['SCRIPT_NAME'], 0, strpos($_SERVER['SCRIPT_NAME'],basename($_SERVER['SCRIPT_NAME']))));
define('EXT', '.php');

require_once(SYS . 'start' . EXT);

?>