<?php

  if(!isset($_SESSION)) session_start();

  class validate {
    public function email($email) {
      try {
        $connection = (new DB)->connect();

        $stm = $connection->prepare('SELECT email from users WHERE email = ?');

        $stm->execute([$email]);
        $result = $stm->fetchAll();

        $connection = null;

        return count($result);
      } catch (PDOxception $e) {
        echo json_encode([
          'error' => $e->getMessage(),
        ]);

        print "Error!: " . $e->getMessage() . "<br/>";
      }
    }
  }
