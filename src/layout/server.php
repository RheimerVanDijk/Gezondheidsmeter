<?php
   //connection db
    $username = "";
    $email = "";
    $errors = array();

    $db = mysqli_connect('localhost', 'root', '', 'registratie');

    //registratie nieuwe lid
    if(isset($_POST['registeer'])){
        $username = htmlspecialchars($_POST["username"]);
        $email = htmlspecialchars($_POST["email"]);
        $password_1 = htmlspecialchars($_POST["password_1"]);
        $password_2 = htmlspecialchars($_POST["password_2"]);
        
        if(empty($username)){
            array_push($errors,"Uw naam is verplicht");
        }
        if(empty($email)){
            array_push($errors,"Uw email is verplicht");
        }
        if(empty($password_1)){
            array_push($errors,"Uw wachtwoord is verplicht");
        }
        if($password_1 != $password_2){
            array_push($errors,"Wachtwoorden komen niet overeen!");
        }
    //wachtwoord hashen
        if(count($errors) == 0){
            $password = md5($password_1);
            $sql = "INSERT INTO users (username,email,password) 
            VALUES('$username','$email','$password')";
            mysqli_query($db, $sql);
        }
    }

    //login
    if(isset($_POST['login'])){
        $username = htmlspecialchars($_POST["username"]);
        $password = htmlspecialchars($_POST["password"]);
        
            if(empty($username)){
                array_push($errors,"Uw naam is verplicht");
            }
            if(empty($password)){
                array_push($errors,"Uw wachtwoord is verplicht");

            if(count($errors) == 0){
                $password = md5($password);
                $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
                $result = mysqli_query($db, $query);
                if(mysqli_num_rows($result) == 1){
                    $_SESSION['username'] = $username;
                    $_SESSION['success'] = "Je bent ingelogt welkom.";
                    header('location: Dashboard.php');
                }else{
                    array_push($errors,"foute naam/wachtwoord");
                }
            }
        }
    }

    //loguit
    if(isset($_GET['loguit'])){
        session_destroy();
        unset($_SESSION['username']);
        header('location: login.php');
    }
?>