<?php
    if(!isset($_SESSION)) session_start();

    // CLASSES
    require_once('classes/dbClass.php'); // connection to database
    require_once('classes/passwordClass.php'); // password hash/verify
    require_once('classes/validateClass.php'); // checks if a value already exists in a table
    require_once('classes/userClass.php'); // all classes related to users

    // POST
    require_once('post/register.php'); // requests for register
    require_once('post/login.php'); // requests for login
?>
