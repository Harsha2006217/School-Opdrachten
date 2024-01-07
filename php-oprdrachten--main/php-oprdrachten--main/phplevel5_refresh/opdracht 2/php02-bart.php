
<form action="" method="get">
    <input type="number" name="value1">
    <input type="number" name="value2">
    <input type="submit">
</form>


<?php

if(isset($_GET["value1"])){
    $value1 = $_GET["value1"];
}


if(isset($_GET["value2"])){
    $value2 = $_GET["value2"];
}

$value = $value1 * $value2;
echo "$value1"." * ".$value2." = ".$value;
?>