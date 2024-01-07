<?php
require "database-connectie-bart.php";

$sql ="SELECT * FROM klanten";
$tabel= $conn1->query($sql);
foreach($tabel as $a){
    if($a['woonplaats'] !== 'Amstelveen'){
        $id = $a['klant_id'];
        $sql = "UPDATE klanten SET woonplaats = 'Amstelveen' WHERE klant_id = $id";
        $conn1->query($sql);
        echo "update niet in amstelveen <br>";
    }
    if($a['woonplaats'] == 'Amstelveen'){
        $id = $a['klant_id'];
        $sql = "UPDATE klanten SET woonplaats = 'damsteredam' WHERE klant_id = $id";
        $conn1->query($sql);
        echo "update in amstelveen <br>";
    }
    
    //print_r($a);
    echo "<br>";
}

?>