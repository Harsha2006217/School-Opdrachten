<?php

include "database.php";

if(isset($_POST["antwoord"])){
    $antwoord = $_POST["antwoord"];
}

if($antwoord == null){
    header("Location: index.php");
    exit();
}

if(isset($_POST["id"])){
    $id = $_POST["id"];
}

if($antwoord == "ja"){
    $sql = "DELETE FROM telaat WHERE id = $id";
    $result = $conn->query($sql);
    header("Location: index.php");
    exit();
    }
    
if($antwoord == "nee"){
    header("Location: index.php");
    exit();
    }



?>