<?php
include 'User.php';
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <h2><?php echo $user1->id; ?></h2>
  <ul>
    <li><?php echo $user1->nome; ?></li>
    <li><?php echo $user1->cognome; ?></li>
    <li><?php echo $user1->username; ?></li>
    <li><?php echo $user1->password; ?></li>
    <li><?php echo $user1->email; ?></li>
    <li><?php echo $user1->paese; ?></li>
    <li><?php echo $user1->data_di_nascita; ?></li>
  </ul>

  <h2><?php echo $user2->id; ?></h2>
  <ul>
    <li><?php echo $user2->nome; ?></li>
    <li><?php echo $user2->cognome; ?></li>
    <li><?php echo $user2->username; ?></li>
    <li><?php echo $user2->password; ?></li>
    <li><?php echo $user2->email; ?></li>
    <li><?php echo $user2->paese; ?></li>
    <li><?php echo $user2->data_di_nascita; ?></li>
  </ul>

  <h2><?php echo $user3->id; ?></h2>
  <ul>
    <li><?php echo $user3->nome; ?></li>
    <li><?php echo $user3->cognome; ?></li>
    <li><?php echo $user3->username; ?></li>
    <li><?php echo $user3->password; ?></li>
    <li><?php echo $user3->email; ?></li>
    <li><?php echo $user3->paese; ?></li>
    <li><?php echo $user3->data_di_nascita; ?></li>
  </ul>



</body>
</html>
