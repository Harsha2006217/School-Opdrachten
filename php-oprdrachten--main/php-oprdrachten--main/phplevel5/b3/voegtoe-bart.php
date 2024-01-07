<?php


$servername = "localhost";
$database = "winkel";
$username = "root";
$password = "";

$conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);

if(isset($_POST["titel"])){
    $titel = $_POST["titel"]; 
}

if(isset($_POST["uitgever"])){
    $uitgever = $_POST["uitgever"];

}

if(isset($_POST["platform"])){
    $platform = $_POST["platform"]; 
}

if(isset($_POST["voorraad"])){
    $voorraad = $_POST["voorraad"]; 
}

if(isset($_POST["prijs"])){
    $prijs = $_POST["prijs"]; 
}




$sql = "INSERT INTO producten(titel, uitgever, platform, prijs, voorraad) VALUES ('$titel', '$uitgever', '$platform', '$prijs', '$voorraad')";
$conn->exec($sql);
echo "de data is in de database ingevoerd!"


?>