<?php

$mysql_host = "127.0.0.1";
$mysql_user = "root";
$mysql_password = "root";

$db = new PDO("mysql:host=$mysql_host", $mysql_user, $mysql_password);

$query = file_get_contents("seeder.sql");

$stmt = $db->prepare($query);

if ($stmt->execute()) {
     echo "Success";
} else {
     echo "Fail";
}
