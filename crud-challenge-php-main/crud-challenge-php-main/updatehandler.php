<?php

include "database.php";

if(isset($_GET["id"])){
    $id = $_GET["id"];
}

if(isset($_GET["naam"])){
    $naam = $_GET["naam"];
}


if(isset($_GET["klas"])){
    $klas = $_GET["klas"];
}

if(isset($_GET["reden"])){
    $reden = $_GET["reden"];
} 
if(isset($_GET["telaat_min"])){
    $telaat_min = $_GET["telaat_min"];
    try {
       if($telaat_min <= 0){
        throw new Exception("je kan niet min minuten te laat zijn");
       }
    } 
    finally {
        //pass 
    }
}


$sql = "UPDATE telaat SET naam = '$naam', klas ='$klas', telaat_min = '$telaat_min', reden = '$reden' WHERE id = $id";
$result = $conn->query($sql);



header("Location: index.php");
exit();


?>