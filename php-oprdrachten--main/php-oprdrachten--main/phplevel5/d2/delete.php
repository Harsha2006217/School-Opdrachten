<?php

require "database-connectie-bart.php";

if(isset($_GET["id"])){
    $id = $_GET["id"];
}

$sql = "DELETE FROM klanten where klant_id = $id";
$conn1->exec($sql);
header("Location: d2-bart.php");
exit();


?>