<?php

require_once('model.php');

class Collection extends Model {
   
   public function __construct() {
      $this->properties = array(
         'id' => null,
         'user_id' => null,
         'created' => null,
         'modified' => null
      );
   }
   
}

?>
