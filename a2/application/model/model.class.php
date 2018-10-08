<?php

abstract class model {
  protected $userID;
  protected $firstname;
  protected $lastname;
  protected $email;
  protected $role;
  //function getInfo() {

    /*return array (
      $userID=>'patrudol'
      $firstname=>'Patrick'
      $lastname=>'Rudolph'
      $email=> 'patrudol@iu.edu'
      $role=> 'Admin'

    //'patrudol' => '$userID'
    //'Patrick' => '$firstname'
    );
    */

    public function __construct(){
      //will revist

    }

    public function __set($userID, $firstname) {
      $this->userID = $userID;
      $this->firstname = $firstname;
      return;

    }

    public function __get($userID) {
      return $this->$userID;
    }


}

?>
