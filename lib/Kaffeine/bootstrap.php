<?php
/**
 * @version 0.1
 */

// Versão do sistema
define('KAFFEINE_VERSION', 1.0);

// Informando ao usuário que 
if (!defined('E_DEPRECATED')) {
  define('E_DEPRECATED', 8192);
}

// Se estiver em desenvolvimento exibe os erros
if(ENV=='development'){
  error_reporting(E_ALL & ~E_DEPRECATED);
}

// Localização do Kaffeine
define('KERNEL', CORE_PATH . 'Kaffeine' . DS);


// Diretório da aplicação
if (!defined('APP')) {
	define('APP', ROOT.DS.APP_DIR.DS);
}

// Localização da biblioteca do kernel
define('APPLIBS', APP.'Lib'.DS);

// Localização em disco dos arquivos CSS
define('CSS', WWW_ROOT.'css'.DS);

// Localização em disco dos arquivos Javascripts
define('JS', WWW_ROOT.'js'.DS);

// Localização em disco das imagens públicas
define('IMAGES', WWW_ROOT.'img'.DS);

// Diretório para testes diversos
if (!defined('TESTS')) {
  define('TESTS', APP.'Test'.DS);
}

// Diretório para arquivos temporários
if (!defined('TMP')) {
  define('TMP', APP.'tmp'.DS);
}

// Localização dos logs
define('LOGS', TMP.'logs'.DS);

// Localização do diretório de cache, que pode ser usado por múltiplos sistemas
define('CACHE', TMP.'cache'.DS);

// Script e classes de terceiros
if (!defined('VENDORS')) {
  define('VENDORS', ROOT . DS . 'vendors' . DS);
}

// Imagens
if (!defined('IMAGES_URL')) {
  define('IMAGES_URL', 'img/');
}

// CSS
if (!defined('CSS_URL')) {
  define('CSS_URL', 'css/');
}

// Javascripts
if (!defined('JS_URL')) {
  define('JS_URL', 'js/');
}

// DNS
if(!defined('DNS')){
  define('DNS', $_SERVER['SERVER_NAME']);
}

require KERNEL . 'functions.php';
require KERNEL . 'Core' . DS .'App.php';

spl_autoload_register(Array('App', 'import'));

App::import('Object', 'Core');
App::import('Router', 'Core');
App::import('String', 'Utility');

