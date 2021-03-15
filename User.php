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

  public function __construct($_username, $_password)
 {
   $this->username = $_username;
   $this->password = $_password;
 }
}

$user1 = new User('MarioRossi', 'Yolo');

$user1->id = '1';
$user1->nome = 'Mario';
$user1->cognome = 'Rossi';
$user1->email = 'mr@ciao.it';
$user1->paese = 'Italia';
$user1->data_di_nascita = '01/01/1990';

$user2 = new User('LuigiVerdi', 'Asdf');

$user2->id = '2';
$user2->nome = 'Luigi';
$user2->cognome = 'Verdi';
$user2->email = 'lg@ciao.it';
$user2->paese = 'francia';
$user2->data_di_nascita = '02/02/1990';

$user3 = new User('WarioGialli', 'Rotfl');

$user3->id = '3';
$user3->nome = 'Wario';
$user3->cognome = 'Gialli';
$user3->email = 'wg@ciao.it';
$user3->paese = 'Giappone';
$user3->data_di_nascita = '03/03/1990';
 ?>
