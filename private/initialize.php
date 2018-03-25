<?php


define("PRIVATE_PATH", dirname(__FILE__));
define("PROJECT_PATH", dirname(PRIVATE_PATH));
define("PUBLIC_PATH", PROJECT_PATH . '/public');
define("SHARED_PATH", PRIVATE_PATH . '/shared');
 

$public_end = strpos($_SERVER['SCRIPT_NAME'], '/public') + 7;
$doc_root = substr($_SERVER['SCRIPT_NAME'], 0, $public_end);
define("WWW_ROOT", $doc_root);

$public_end2 = strpos($_SERVER['SCRIPT_NAME'], '/shared') + 7;
$doc_root2 = substr($_SERVER['SCRIPT_NAME'], 0, $public_end2);
define("WWW_ROOTSHARED", $doc_root2);


require_once('functions.php');


//require_once('database.php');
//require_once('query_functions.php');
//require_once('db_credentials.php');