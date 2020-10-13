<?php
    if (!isset($_SESSION)) session_start();

    $_SESSION['loggedIn'] = false;
    $_SESSION['username'] = "";
    $_SESSION['userId'] = "";

    header("Location: index.php");
?>
