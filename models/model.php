<?php

abstract class Model {
   
   protected $properties = array();
   
   public function __set($name,$value) {
      if(array_key_exists($name, $this->properties)) {
         $this->properties[$name] = $value;
         return true;
      }
      $trace = debug_backtrace();
      trigger_error(
         'Undefined property via __set(): ' . $name .
         ' in ' . $trace[0]['file'] .
         ' on line ' . $trace[0]['line'],
         E_USER_NOTICE);
      return null;
   }
   
   public function __get($name) {
      if(array_key_exists($name, $this->properties)) {
         return $this->properties[$name];
      }
      $trace = debug_backtrace();
      trigger_error(
         'Undefined property via __get(): ' . $name .
         ' in ' . $trace[0]['file'] .
         ' on line ' . $trace[0]['line'],
         E_USER_NOTICE);
      return null;
   }
   
}

?>