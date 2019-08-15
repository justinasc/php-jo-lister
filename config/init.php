<?php
// Start session
session_start();

// Config File
require_once 'config.php';

// Include helper
require_once 'helpers/system_helper.php';

// Auto load classes
function __autoload($class_name){
    require_once 'lib/'.$class_name.'.php';
}
