


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<style>
    th{
        background-color: lightblue;
    }
</style>


<?php 
require "database-connectie-bart.php";

$sql = "SELECT * FROM klanten";
$allestudenten = $conn1->query($sql);
?>
<table border="1"> 
<th>voornaam</th>
<th>achternaam</th>
<th>woonplaats</th>
<?php 
foreach($allestudenten as $a){
    echo "<tr>";
    echo "<td>".$a["voornaam"]."</td>";
    echo "<td>".$a["achternaam"]."</td>";
    echo "<td>".$a["woonplaats"]."</td>";
    echo "</tr>";
}
?>
</table>
</body>
</html>