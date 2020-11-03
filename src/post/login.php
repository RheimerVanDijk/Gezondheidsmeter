<?php

  if (isset($_POST['login'])) {
    $email = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);

    $userData = (new User)->get($email);


    if (property_exists($userData, 'password')) {
      if (password::verify($userData->password, $password)) {
        $_SESSION['loggedIn'] = true;
        $_SESSION['email'] = $email;
        $_SESSION['username'] = $userData->username;
        $_SESSION['userId'] = $userData->id;

        echo json_encode([
          'type' => 'success',
          'msg' => 'je bent ingelogd'
          ]);
      };
    } else {
      echo json_encode([
        'type' => 'danger',
        'msg' => 'Kan gebruiker niet vinden'
        ]);
    }

    exit;
  }

  if(isset($_POST['checkForgotten'])){
    try{
      $connection = (new DB)->connect();
    

      $stm = $connection->prepare("SELECT * FROM `results` WHERE id = 'user_id'");
  
      $stm->execute([
          'user_id' => $_SESSION['userId'],
      ]);
  
      $result = $stm->fetchAll();

      $lastDate = $result['created_at'];

      $currentDate = date("y/m/d");
  
      if($lastDate < $currentDate){
          echo json_encode([
              $currentDate,
              $lastDate,
              'type' => 'true'
              ]);
          
      }else{
          echo json_encode([
              $currentDate,
              $lastDate,
              'type' => 'false'
              ]);
      }
  
      $connection = null;
    }
    catch (PDOxception $e) {
      echo json_encode([
        'error' => $e->getMessage(),
      ]);

      print "Error!: " . $e->getMessage() . "<br/>";
    }

    exit;
  }
