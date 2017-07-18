<?php

//Common settings
ini_set('display_errors',1);
error_reporting(E_ALL);

//System files connections
define('ROOT', dirname(__FILE__));
require_once (ROOT.'/components/Router.php');

// DB connection
require_once (ROOT.'/components/Db.php');

//Calling Router

    $router = new Router();

    $router->run();
