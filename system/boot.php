<?php

/**
 * Libraries
 */
$files = glob(APP . 'libraries' . DS . '/*' . EXT);
foreach ($files as $file) {
    require_once($file);   
}

/**
 * Functions
 */
$files = glob(SYS . 'functions' . DS . '/*' . EXT);
foreach ($files as $file) {
    require_once($file);   
}

?>