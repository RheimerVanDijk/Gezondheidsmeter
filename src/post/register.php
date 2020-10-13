<?php

if(isset($_POST['register'])) {


  $email = htmlspecialchars($_POST['email']);
  $username = htmlspecialchars($_POST['username']);
  $password = password::hash($_POST['password']);
  $date = htmlspecialchars($_POST['date']);
  $checkValue = (new validate)->email($email);

  if ($checkValue == 0) {
    try {
      $connection = (new DB)->connect();
  
      $stm = $connection->prepare('INSERT INTO `Users` (email, username, password, created_at) VALUES (:email, :username, :password, :created_at)');
  
      $stm->execute([
        'email' => $email,
        'username' => $username,
        'password' => $password,
        'created_at' => $date,
      ]);
  
      $connection = null;
  
      echo json_encode([
      'type' => 'success',
      'msg' => 'Je account is succesvol aangemaakt'
      ]);
    }
    catch (PDOxception $e) {
      echo json_encode([
        'error' => $e->getMessage(),
      ]);
      print "Error!: " . $e->getMessage() . "<br/>";
    }
  } else {
    echo json_encode([
      'error' => 'gebruiker bestaat al',
      ]);
  }

  die;
}