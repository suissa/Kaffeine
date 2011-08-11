<?php

class  Session extends Object {

  private static $__timeout = 3600;
  
  private static $__sessionName = 'KAFFSSID';
  
  private static $__useMemcache = false;

  /**
   * Seta o tempo de duração da sessão
   * @name setTimeout
   * @access public
   * @version 0.1
   * @static
   * @param integer $_timeout 
   */
  public static function setTimeout($_timeout=false){
    self::$__timeout = $_timeout;
  }
  
  /**
   * Retorna o tempo de duração de uma sessão
   * @version 0.1
   * @name getTimeout
   * @access public
   * @static
   * @return integer
   */
  public static function getTimeout(){
    return self::$__timeout;
  }
  
  /**
   * Seta o nome da sessão
   * @param string $_sessionName
   * @version 0.1
   * @name setName
   * @access public
   * @static
   * @return string
   */
  public static function setName($_sessionName=false){
    self::$__sessionName = $_sessionName;
    return self::$__sessionName;
  }
  
  /**
   * Retorna o nome da sessão
   * @version 0.1
   * @name getName
   * @access public
   * @static
   * @return string
   */
  public static function getName(){
    return self::$__sessionName;
  }
  
  /**
   * Utilizar ou não o Memcache
   * @version 0.1
   * @name Memcache
   * @static
   * @return bool
   */
  public static function Memcache($_arg=false){
    self::$__useMemcache = $_arg;
    return self::$__useMemcache;
  }
  
}