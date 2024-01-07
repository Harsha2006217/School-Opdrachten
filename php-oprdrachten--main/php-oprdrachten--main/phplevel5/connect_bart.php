<?php


$servername = "localhost";
$database = "games";
$username = "root";
$password = "";

$conn1 = new PDO("mysql:host=$servername;dbname=$database", $username, $password);


$servername1 = "localhost";
$database1 = "artiesten";
$username1 = "roc-student";
$password1 = "welkom123";

$conn2 = new PDO("mysql:host=$servername1;dbname=$database1", $username1, $password1);


?>