<?php
  if(!isset($_SESSION)) session_start();

  class User {
    public function get($email) {
      try {
        $connection = (new DB)->connect();

        $stm = $connection->prepare('SELECT id, email,username ,password from users WHERE email = ?');

        $stm->execute([$email]);
        $result = $stm->fetch();
        $object = (object) $result;

        $connection = null;
        return $object;

      } catch (PDOxception $e) {
        echo json_encode([
          'error' => $e->getMessage(),
        ]);

        print "Error!: " . $e->getMessage() . "<br/>";
      }

      exit;
    }

    public function getID($email) {
      try {
        $connection = (new DB)->connect();

        $stm = $connection->prepare('SELECT id from users WHERE email = ?');

        $stm->execute([$email]);
        $result = $stm->fetch();

        $connection = null;
        return $result;
      } catch (PDOxception $e) {
        echo json_encode([
          'error' => $e->getMessage(),
        ]);

        print "Error!: " . $e->getMessage() . "<br/>";
      }

      exit;
    }
  }
