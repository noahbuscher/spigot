<?php

/**
 * Functions
 */
$files = glob(SYS . 'functions' . DS . '/*' . EXT);
foreach ($files as $file) {
    require_once($file);   
}

?>