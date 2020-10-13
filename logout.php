<?php
    if(!isset($_SESSION)) session_start();

    $_SESSION['loggedIn'] = false;
    $_SESSION['username'] = "";
    $_SESSION['userId'] = "";
    // session_unset();
    // session_destroy();
    // session_write_close();
    header("Location: index.php");
?>
