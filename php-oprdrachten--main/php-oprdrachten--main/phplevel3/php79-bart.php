<?php
$array = array("voornaam" => "bart", "achternaam" => "nieman", "geboortedatum" => "17-11-2006", "woonplaats" => "amstelveen");
foreach($array as $i => $i_value){
    echo "key=" . $i . ", value=" . $i_value;
    echo "<br>";
}
?>