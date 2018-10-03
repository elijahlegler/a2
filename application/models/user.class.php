<?php
class user extends Model {

  function __construct() {
    parent::__construct();
  }

  function __set($name, $value) {
    $this->$name = $value;
  }

  function __get($name) {
    return $this->$name;
  }

  function __destruct() {
  }

  function getName() {
    return array (
      'userid' => $this->userID = 'elegler',
      'firstname' => $this->firstname = 'Elijah',
      'lastname' => $this->lastname = 'Legler',
      'email' => $this->email = 'elegler@iu.edu',
      'role' => $this->role = 'admin'
    );
  }
}
 ?>
