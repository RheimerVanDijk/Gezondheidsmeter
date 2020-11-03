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
    

      $stm = $connection->prepare("SELECT * FROM `results` WHERE user_id = :id ORDER BY id DESC LIMIT 1");
  

      $stm->execute([
          'id' => $_SESSION['userId'],
      ]);

  
      $result = $stm->fetch();

      $lastDate = $result['created_at'];

      echo json_encode([
        'lastDate' => $lastDate
      ]);
          

  
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
