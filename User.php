<?php

class User{
  public $id;
  public $nome;
  public $cognome;
  public $username;
  public $password;
  public $email;
  public $paese;
  public $data_di_nascita;

  public function __construct($_username, $password)
 {
   $this->username = $_username;
   $this->password = $_password;
 }

}

 ?>
