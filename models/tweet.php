<?php

require_once('model.php');

class Tweet extends Model {
   
   public function __construct() {
      $this->properties = array(
         'id' => null,
         'collection_id' => null,
         'url' => null,
         'screen_name' => null,
         'text' => null,
         'image_url' => null,
         'date' => null
      );
   }
   
}

?>
