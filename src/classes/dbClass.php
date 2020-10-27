<?php
  if (!isset($_SESSION)) session_start();

  class DB {
    public function connect() {
      $dns = 'mysql:host=localhost;dbname=gezondheidsmeter';
      $user = 'root';
      $pass = '';

      return new PDO($dns, $user, $pass);
    }
  }
