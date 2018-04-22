<?php
session_start();
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);
require 'config.php';


define ("BASE_URL", "http://localhost/cartaosus"); 
define("BASE_URL_CSS", "http://localhost/cartaosus/assets/css");
define ("BASE_URL_IMAGES","http://localhost/cartaosus/assets/images");
define ("BASE_URL_JS","http://localhost/cartaosus/assets/js");
define ("BASE_URL_BOWER","http://localhost/cartaosus/library");
define ("BASE_URL_DIST","http://localhost/cartaosus/assets/dist");
define ("BASE_URL_CKEDITOR","http://localhost/cartaosus/library/ckeditor");
spl_autoload_register(function ($class) {
    if (file_exists('controllers/' . $class . '.php')) {
        require_once 'controllers/' . $class . '.php';
    } elseif (file_exists('models/' . $class . '.php')) {
        require_once 'models/' . $class . '.php';
    } elseif (file_exists('core/' . $class . '.php')) {
        require_once 'core/' . $class . '.php';
    } elseif (file_exists('helpers/' . $class . '.php')) {
        require_once 'helpers/' . $class . '.php';
    }
});

$core = new Core();
$core->run();
?>