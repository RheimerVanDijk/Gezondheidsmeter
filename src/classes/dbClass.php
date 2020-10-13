<?php
  if(!isset($_SESSION)) session_start();

  class DB {
    public function connect() {
      $dns = 'mysql:host=192.168.0.162;dbname=gezondheidsmeter';
      $user = 'elian';
      $pass = 'elian';

      return new PDO($dns, $user, $pass);
    }
  }
