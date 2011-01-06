<?php

require_once('models/user.php');
require_once('models/donation.php');
require_once('models/collection.php');
require_once('models/tweet.php');

class DBConnection {
   
   private $host = 'localhost';
   private $user = 'root';
   private $password = 'bl0g4tw33t';
   private $database = 'blogatweet';
   
   public function __construct() {
      mysql_connect($this->host,$this->user,$this->password) or die(mysql_error());
      mysql_select_db($this->database) or die(mysql_error());
   }
   
   public function getSingleRow($query) {
      $result = mysql_query($query) or die(mysql_error()); 
      if(mysql_num_rows($result) < 1) return false;
      $data = mysql_fetch_array($result) or die(mysql_error());
      return $data;
   }
   
   public function getRows($query) {
      $result = mysql_query($query) or die(mysql_error()); 
      if(mysql_num_rows($result) < 1) return false;
      $data = array();
      while($row = mysql_fetch_array($result)) {
         $data[] = $row;
      }
      return $data;
   }
   
   public function execute($query) {
      mysql_query($query) or die(mysql_error());
   }
   
   public function getUserByScreenName($screen_name) {
      $query = "SELECT * FROM users WHERE screen_name='".$screen_name."'";
      $result = $this->getSingleRow($query);
      if(!$result) return false;
      return $this->createUserFromDb($result);
   }
   
   public function getUserById($id) {
      $query = "SELECT * FROM users WHERE id='".$id."'";
      $result = $this->getSingleRow($query);
      if(!$result) return false;
      return $this->createUserFromDb($result);
   }
   
   public function getDonationByUserId($user_id) {
      $query = "SELECT * FROM donations WHERE user_id='".$user_id."'";
      $result = $this->getSingleRow($query);
      if(!$result) return false;
      return $this->createDonationFromDb($result);
   }
   
   public function getDonationById($id) {
      $query = "SELECT * FROM donations WHERE id='".$id."'";
      $result = $this->getSingleRow($query);
      if(!$result) return false;
      return $this->createDonationFromDb($result);
   }

   public function getDonationByCreated($created) {
      $query = "SELECT * FROM donations WHERE created='".$created."'";
      $result = $this->getSingleRow($query);
      if(!$result) return false;
      return $this->createDonationFromDb($result);
   }
   
   public function getCollectionById($id) {
      $query = "SELECT * FROM collections WHERE id='".$id."'";
      $result = $this->getSingleRow($query);
      if(!$result) return false;
      return $this->createCollectionFromDb($result);
   }
   
   public function getCollectionByCreated($created) {
      $query = "SELECT * FROM collections WHERE created='".$created."'";
      $result = $this->getSingleRow($query);
      if(!$result) return false;
      return $this->createCollectionFromDb($result);
   }

   public function getCollectionsByUserId($user_id) {
      $query = "SELECT * FROM collections WHERE user_id='".$user_id."'";
      $result = $this->getRows($query);
      if(!$result) return false;
      $collections = array();
      foreach($result as $r) {
         $collections[] = $this->createCollectionFromDb($r);
      }
      return $collections;
   }
   
   public function getTweetByUrl($url) {
      $query = "SELECT * FROM tweets WHERE url='".$url."'";
      $result = $this->getSingleRow($query);
      if(!$result) return false;
      return $this->createTweetFromDb($result);
   }
   
   public function getTweetsByCollectionId($collection_id) {
      $query = "SELECT * FROM tweets WHERE collection_id='".$collection_id."'";
      $result = $this->getRows($query);
      if(!$result) return false;
      $tweets = array();
      foreach($result as $r) {
         $tweets[] = $this->createTweetFromDb($r);
      }
      return $tweets;
   }
   
   public function saveUser($user) {
      if($user->id == null) {
         $query = "INSERT INTO users (twitter_id,screen_name,is_beta,created,last_access) VALUES('".$user->twitter_id."','".$user->screen_name."','".$user->is_beta."','".$user->created."','".$user->last_access."')";
      } else {
         $query = "UPDATE users SET twitter_id='".$user->twitter_id."', screen_name='".$user->screen_name."', is_beta='".$user->is_beta."', last_access='".$user->last_access."' WHERE id='".$user->id."'";
      }
      $this->execute($query);
      return $this->getUserByScreenName($user->screen_name);
   }
   
   public function saveDonation($donation) {
      if($donation->id == null) {
         $query = "INSERT INTO donations (user_id,amount,token_id,caller_reference,transaction_id,transaction_status,request_id,created) VALUES ('".$donation->user_id."','".$donation->amount."','".$donation->token_id."','".$donation->caller_reference."','".$donation->transaction_id."','".$donation->transaction_status."','".$donation->request_id."','".$donation->created."')";
      } else {
         $query = "UPDATE donations SET amount='".$donation->amount."', token_id='".$donation->token_id."', caller_reference='".$donation->caller_reference."', transaction_id='".$donation->transaction_id."', transaction_status='".$donation->transaction_status."', request_id='".$donation->request_id."' WHERE id='".$donation->id."'";
      }
      $this->execute($query);
      return $this->getDonationByCreated($donation->created);
   }
   
   public function saveCollection($collection) {
      if($collection->id == null) {
         $query = "INSERT INTO collections (user_id,created,modified) VALUES ('".$collection->user_id."','".$collection->created."','".$collection->modified."')";
      } else {
         $query = "UPDATE collections SET user_id='".$collection->user_id."', created='".$collection->created."', modified='".$collection->modified."' WHERE id='".$collection->id."'";
      }
      $this->execute($query);
      return $this->getCollectionByCreated($collection->created);
   }
   
   public function saveTweet($tweet) {
      if($tweet->id == null) {
         $query = "INSERT INTO tweets (collection_id,url,screen_name,text,image_url,date) VALUES ('".$tweet->collection_id."','".$tweet->url."','".$tweet->screen_name."','".$tweet->text."','".$tweet->image_url."','".$tweet->date."')";
      } else {
         $query = "UPDATE tweets SET collection_id='".$tweet->collection_id."', url='".$tweet->url."', screen_name='".$tweet->screen_name."', text='".$tweet->text."', image_url='".$tweet->image_url."', date='".$tweet->date."' WHERE id='".$tweet->id."'";
      }
      $this->execute($query);
      return $this->getTweetByUrl($tweet->url);
   }
   
   public function deleteAllTweetsForCollection($collection_id) {
      $query = "DELETE FROM tweets WHERE collection_id='".$collection_id."'";
      $this->execute($query);
   }

   private function createUserFromDb($data) {
      $user = new User();
      $user->id = $data['id'];
      $user->twitter_id = $data['twitter_id'];
      $user->screen_name = $data['screen_name'];
      $user->is_beta = $data['is_beta'];
      $user->created = $data['created'];
      $user->last_access = $data['last_access'];
      return $user;
   }

   private function createDonationFromDb($data) {
      $donation = new Donation();
      $donation->id = $data['id'];
      $donation->user_id = $data['user_id'];
      $donation->amount = $data['amount'];
      $donation->token_id = $data['token_id'];
      $donation->caller_reference = $data['caller_reference'];
      $donation->transaction_id = $data['transaction_id'];
      $donation->transaction_status = $data['transaction_status'];
      $donation->request_id = $data['request_id'];
      $donation->created = $data['created'];
      return $donation;
   }
   
   private function createCollectionFromDb($data) {
      $collection = new Collection();
      $collection->id = $data['id'];
      $collection->user_id = $data['user_id'];
      $collection->created = $data['created'];
      $collection->modified = $data['modified'];
      return $collection;
   }
   
   private function createTweetFromDb($data) {
      $tweet = new Tweet();
      $tweet->id = $data['id'];
      $tweet->collection_id = $data['collection_id'];
      $tweet->url = $data['url'];
      $tweet->screen_name = $data['screen_name'];
      $tweet->text = $data['text'];
      $tweet->image_url = $data['image_url'];
      $tweet->date = $data['date'];
      return $tweet;
   }
   
}

?>
