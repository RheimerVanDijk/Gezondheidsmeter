<?php

if(isset($_POST['login'])) {
  $email = htmlspecialchars($_POST['username']);
  $password = htmlspecialchars($_POST['password']);

  $userData = (new User)->get($email);
  if (property_exists($userData, 'password')) {
    if(password::verify($userData->password, $password)) {
      $_SESSION['loggedIn'] = true;
      $_SESSION['username'] = $email;
      $_SESSION['userId'] = $userData->id;
      // unset ($_SESSION['loggedIn'];
      // session_destroy ();
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