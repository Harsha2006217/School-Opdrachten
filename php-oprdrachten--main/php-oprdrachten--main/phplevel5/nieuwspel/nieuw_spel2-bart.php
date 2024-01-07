<?php

$servername = "localhost";
$database = "winkel";
$username = "root";
$password = "";

$conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
$titel= "test";
$uitgever="microsoft";
$platform= "pc";
$prijs= 69420;
$voorraad=21;
$sql = "INSERT INTO producten(titel, uitgever, platform, prijs, voorraad) VALUES ('$titel', '$uitgever', '$platform', $prijs, $voorraad)";

$conn->exec($sql);
echo "klaar"

?>

