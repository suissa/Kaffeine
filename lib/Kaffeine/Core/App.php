<?php

class App {

  // Nome dos objetos carregados
  private static $__loadedFiles = Array();
  
  // Objetos carregados
  private static $__loadedObjects = Array();

  public static function import($_className, $_path){
    
    // Verifica se o CoreDir existe
    if(is_dir(KERNEL . DS . $_path)){
      
      // Verifica se o arquivo solicitado existe
      if(file_exists(KERNEL . DS . $_path . DS . $_className . '.php')){
        
        // Inclui o arquivo
        include KERNEL . DS . $_path . DS . $_className . '.php';
        
        // Carregado
        self::$__loadedFiles[] = $_path . DS . $_className . '.php';
        self::$__loadedObjects[] = $_path . DS . $_className;

        // Se a classe existe
        if(class_exists($_className)){
          
        } else {
          
          trigger_error('O arquivo ' . $_className . '.php não possui uma classe definida em ' . KERNEL, E_USER_ERROR);
          
        }
         
        
      } else {
        
        trigger_error('O arquivo ' . $_className . '.php em ' . KERNEL . ' não foi encontrado ', E_USER_ERROR);
        
      }
      
    } else {
      
      trigger_error('O diretório ' . $_path . ' em ' . KERNEL . ' não foi encontrado ', E_USER_ERROR);
      
    }
    
  }
  
  public static function prLoadedFiles(){
    echo '<pre>';
    print_r(self::$__loadedFiles);
    echo '</pre>';
  }
  
  public static function prLoadedObjects(){
    echo '<pre>';
    print_r(self::$__loadedObjects);
    echo '</pre>';
  }
  
}