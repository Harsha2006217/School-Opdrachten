<?php

$servername = "localhost";
$database = "winkel";
$username = "root";
$password = "";

$conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
$sql = "INSERT INTO producten(titel, uitgever, platform, prijs, voorraad) VALUES ('f1 2022', 'EA sports', 'playstation 5',  28,  69 )";

$conn->exec($sql);
echo "klaar"

?>

