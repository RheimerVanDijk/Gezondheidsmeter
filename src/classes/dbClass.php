<?php
  if (!isset($_SESSION)) session_start();

  class DB {
    public function connect() {
      $dns = 'mysql:host=127.0.0.1;dbname=gezondheidsmeter';
      $user = 'root';
      $pass = 'root';

      return new PDO($dns, $user, $pass);
    }
  }
