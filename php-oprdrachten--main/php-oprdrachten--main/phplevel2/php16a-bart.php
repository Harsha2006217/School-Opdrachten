<?php
$mijnArray=['Nouaman','Aart','Samil','Rainee','Diego','Omer','Wessel','Jari','Max','Brian','Kikiya'];
include_once('mijnFuncties.php');

foreach($mijnArray as $item){

    welkom2($woft = 'welkom', $naam=$item);
    welkom2($woft = 'tot ziens', $naam=$item);
    echo "<br>";
}


?>