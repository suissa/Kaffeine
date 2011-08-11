<?php
// Separador de diretórios
if (!defined('DS')) {
  define('DS', DIRECTORY_SEPARATOR);
}
  
// Definindo o diretório raíz
if (!defined('ROOT')) {
  define('ROOT', dirname(dirname(dirname(__FILE__))));
}

// Setando o nome do diretório atual para o "app"
if (!defined('APP_DIR')) {
  define('APP_DIR', basename(dirname(dirname(__FILE__))));
}

// Localização absoluta do "kernel" sem o separador no final
if (!defined('CORE_INCLUDE_PATH')) {
  define('CORE_INCLUDE_PATH', ROOT . DS . 'lib');
}

// Outras definições (não é necessário editar)
if (!defined('WEBROOT_DIR')) {
  define('WEBROOT_DIR', basename(dirname(__FILE__)));
}
if (!defined('WWW_ROOT')) {
  define('WWW_ROOT', dirname(__FILE__) . DS);
}
if (!defined('CORE_PATH')) {
  define('APP_PATH', ROOT . DS . APP_DIR . DS);
  define('CORE_PATH', CORE_INCLUDE_PATH . DS);
}

if(!defined('CONFIG_ROOT')){
  define('CONFIG_ROOT', dirname(__FILE__) . DS . 'Config');
}

// Arquivo de condigurações
if(file_exists(CONFIG_ROOT . DS . 'config.php'))
  include CONFIG_ROOT . DS . 'config.php';
else
  trigger_error ('O arquivo config.php não foi encontrado em ' . CONFIG_ROOT . DS, E_USER_ERROR);

if (!include(CORE_PATH . 'Kaffeine' . DS . 'bootstrap.php')) {
  trigger_error("O kernel Kaffeine não pode ser encontrado.", E_USER_ERROR);
}

if(!defined('ENV')){
  define('ENV', 'development');
}