<?php
class user extends model {

  public function __construct(){
    parent::__construct();

  }

  public function __set($userID, $firstname) {
    
  }

  public function __get($userID) {
    return $this->$userID;
  }
  public function getName(){
    return $this->$userID;
    return $this->$firstname;
    return $this->$lastname;
    return $this->$email;
    return $this->$role;
  }
}

 ?>
