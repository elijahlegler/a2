<?php
class controller {
  public $load;
  public $model;

  function __construct() {

    $this->load = new Load();
    $this->user = new user();
    $this->home();
  }

  function home() {
    $data = $this->user->getName();

    $this->load->view('view.php', $data);
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
