<?php

if (isset($_POST["getAwnsers"])) {
  $sectionId = htmlspecialchars($_POST["sectionID"]);

  try {
    $connection = (new DB)->connect();

    $stm = $connection->prepare("SELECT * FROM Results
    INNER JOIN (SELECT id, section_id FROM Questions ) Questions ON Results.question_id = Questions.id
    INNER JOIN (SELECT id, section FROM Sections) Sections ON Questions.section_id = Sections.id
    INNER JOIN (SELECT id, points FROM Awnsers) Awnsers ON Results.awnser_id = Awnsers.id
    WHERE Results.user_id = :user_id AND Sections.id = :section_id");

    $stm->execute([
      'user_id' => $_SESSION['userId'],
      'section_id' => $sectionId
    ]);

    $result = $stm->fetchAll();

    $connection = null;

    echo json_encode([
      $result
    ]);

  }
  catch (PDOxception $e) {
    echo json_encode([
      'error' => $e->getMessage(),
    ]);

    print "Error!: " . $e->getMessage() . "<br/>";
  }
}

if (isset($_POST["getAllAwnsers"])) {
  try {
    $connection = (new DB)->connect();

    $stm = $connection->prepare("SELECT * FROM Results
    INNER JOIN (SELECT id, section_id FROM Questions ) Questions ON Results.question_id = Questions.id
    INNER JOIN (SELECT id, section FROM Sections) Sections ON Questions.section_id = Sections.id
    INNER JOIN (SELECT id, points FROM Awnsers) Awnsers ON Results.awnser_id = Awnsers.id
    WHERE Results.user_id = :user_id");

    $stm->execute([
      'user_id' => $_SESSION['userId'],
    ]);

    $result = $stm->fetchAll();

    $connection = null;

    echo json_encode([
      $result
    ]);

  }
  catch (PDOxception $e) {
    echo json_encode([
      'error' => $e->getMessage(),
    ]);

    print "Error!: " . $e->getMessage() . "<br/>";
  }
}

if (isset($_POST["getWholeAverage"])) {
  try {
    $connection = (new DB)->connect();

    $stm = $connection->prepare("SELECT * FROM Results
    INNER JOIN (SELECT id, section_id FROM Questions ) Questions ON Results.question_id = Questions.id
    INNER JOIN (SELECT id, section FROM Sections) Sections ON Questions.section_id = Sections.id
    INNER JOIN (SELECT id, points FROM Awnsers) Awnsers ON Results.awnser_id = Awnsers.id");

    $stm->execute();

    $result = $stm->fetchAll();

    $connection = null;

    echo json_encode([
      $result
    ]);

  }
  catch (PDOxception $e) {
    echo json_encode([
      'error' => $e->getMessage(),
    ]);

    print "Error!: " . $e->getMessage() . "<br/>";
  }
}
