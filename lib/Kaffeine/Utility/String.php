<?php
/**
 * Este objeto manipula as strings de diversas formas úteis
 * @version 0.1
 * @name String
 * @package Kaffeine.Utility
 */

class String extends Object {
  
  public static function label_count($_count = false, $_none='Nenhum registro', $_one='1 registro', $_more='%s registros', $_return=false) {
    
    // Verifica se é inteiro
    if(!is_int($_count) || $_count < 0) {
      trigger_error('Valor de parâmetro não é do tipo inteiro e maior que 0 (zero)');
      self::quit();
    } else {

      # Verificando a quantidade de registros informado
      switch($_count) {
        case 0: $_txt = $_none; break;
        case 1: $_txt = $_one; break;
        default: $_txt = sprintf($_more, $_count);
      }#switch
      
      if($_return == false)
        echo $_txt;
      else
        return $_txt;
    }
  }
  
  /**
   * Trabalhando com URL's limpas
   * @name rewrite
   * @version 0.2
   */
  function rewrite($_index='none') {
    $_rewrite      = explode('/', str_ireplace(REWRITE_EXT, '', remove_ultimo_caractere(str_replace(str_replace(__PATH__, '/', $_SERVER['SCRIPT_NAME']), '', str_replace(__PATH__, '/', $_SERVER['REQUEST_URI'])), '/')));
    $_rewrite['0'] = $_request_uri = str_ireplace(REWRITE_EXT, '', str_replace(str_replace(__PATH__, '/', $_SERVER['SCRIPT_NAME']), '', str_replace(__PATH__, '/', $_SERVER['REQUEST_URI'])));

    if(is_int($_index)) {
      $_return = remove_ultimo_caractere($_rewrite[$_index], '/');
      if(strpos($_return, '?')>0) {
        $_tmp = explode('?', $_return);
        $_return = $_tmp[0];
      }
      return $_return;
    } else {
      return $_rewrite;
    }
  }
  
}