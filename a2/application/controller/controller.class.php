<?php

class controller {
  public $load;
  //public $model;
  public $user;

  function __construct() {
    $this->load = new Load();
    $this->user = new user();
    $this->home();

  }



  function home() {

    $ID->userID = 'patrudol';
    $name1->firstname = 'Patrick';
    $name2->lastname = 'Rudolph';
    $email->email = 'patrudol@iu.edu';
    $role->role = 'Admin';


    $data = $this->user->getName();
    $this->load->view('view.php', $data);


  }

}
 ?>
