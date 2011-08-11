<?php
// Obtendo o diretório do Kaffeine
define('APP_DIR', 'app');
define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(__FILE__));
define('WEBROOT_DIR', 'webroot');
define('WWW_ROOT', ROOT . DS . APP_DIR . DS . WEBROOT_DIR . DS);

// Se o Kernel estiver fora do diretório comum
if(!defined('KERNEL_PATH')){
  define('KERNEL_PATH', ROOT . DS . 'lib');
}


// Seta o diretório de inclusão ou define o diretório do App e do Kernel
define('APP_PATH', ROOT . DS . APP_DIR . DS);
define('CORE_PATH', KERNEL_PATH . DS);

require APP_DIR . DS . WEBROOT_DIR . DS . 'index.php';