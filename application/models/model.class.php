<?php
abstract class Model {

  protected $userID;
  protected $firstname;
  protected $lastname;
  protected $email;
  protected $role;

  function __construct() {
    //we will revisit this
  }

  function __set($name, $value) {
    $this->$name = $value;
  }

  function __get($name) {
    return $this->$name;
  }

  function __destruct() {
  }
}
 ?>
