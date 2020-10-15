<?php

if(isset($_POST["deleteAccount"])) {
  try {
    $connection = (new DB)->connect();

    $stm = $connection->prepare("DELETE FROM `Users` WHERE id = :user_id");

    $stm->execute([
      'user_id' => $_SESSION['userId'],
    ]);

    $connection = null;

    echo json_encode([
      'type' => 'success',
    ]);
  }
  catch (PDOxception $e) {
    echo json_encode([
      'error' => $e->getMessage(),
    ]);

    print "Error!: " . $e->getMessage() . "<br/>";
  }
}