<?php
if(isset($_GET["id"])){
    $id = $_GET["id"];
}
if(isset($_GET["voornaam"])){
    $voornaam = $_GET["voornaam"];
}

if(isset($_GET["achternaam"])){
    $achternaam = $_GET["achternaam"];
}

if(isset($_GET["woonplaats"])){
    $woonplaats = $_GET["woonplaats"];
}

$sql = 'UPDATE klanten SET voornaam = "$voornaam", achternaam = "$achternaam", woonplaats = "$woonplaats" WHERE klant_id = $id';
$row = $conn1->query($sql);

header("Location: d2-bart.php");
exit();

echo "test";

?>