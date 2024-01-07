<?php

include "database.php";


if(isset($_GET["naam"])){
    $naam = $_GET["naam"];
    if(strlen($naam) > 30 ){
        header("Location: error.php");
        exit();
    } 
}


if(isset($_GET["klas"])){
    $klas = $_GET["klas"];
    if(strlen($klas) > 3 ){
        header("Location: error.php");
        exit();
    } 
}


if(isset($_GET["telaat_min"])){
    $telaat_min = $_GET["telaat_min"];
}


if(isset($_GET["reden"])){
    $reden = $_GET["reden"];
    if(strlen($reden) > 255 ){
        header("Location: error.php");
        exit();
    } 
}





$sql = "INSERT INTO telaat (naam, klas, telaat_min, reden) VALUES('$naam', '$klas', $telaat_min, '$reden');";
echo $sql;
$result = $conn->query($sql);

header("Location: index.php");
exit();


?>