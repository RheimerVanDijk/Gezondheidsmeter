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

    die;
  }
