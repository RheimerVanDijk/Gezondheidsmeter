<?php
  if (!isset($_SESSION)) session_start();

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

    public function forgotten(){
      try{
        $connection = (new DB)->connect();
      
  
        $stm = $connection->prepare("SELECT * FROM `results` WHERE id = 'user_id'");
    
        $stm->execute([
            'user_id' => $_SESSION['userId'],
        ]);
    
        $result = $stm->fetchAssoc();
        $lastDate = $result['created_at'];
    
        $currentDate = date("y/m/d");
    
        if($lastDate < $currentDate){
            echo json_encode([
                $currentDate,
                $lastDate
                ]);
            return true;
        }else{
            echo json_encode([
                $currentDate,
                $lastDate
                ]);
            return false;
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
  }
