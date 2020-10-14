<?php

if (isset($_POST["saveResults"])) {
  // echo "gay";
  $awnsersArray = json_decode($_POST["awnsersObject"]);

  try {
    $connection = (new DB)->connect();

    $stm = $connection->prepare('INSERT INTO `Results` (user_id, question_id, awnser_id, created_at) VALUES (:user_id, :question_id, :awnser_id, CURRENT_DATE())');

    foreach ($awnsersArray as $awnser) {
      print_r($awnser);

      $stm->execute([
        'user_id' => $_SESSION['userId'],
        'question_id' => $awnser->questionID,
        'awnser_id' => $awnser->puntenID,
      ]);

    };

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