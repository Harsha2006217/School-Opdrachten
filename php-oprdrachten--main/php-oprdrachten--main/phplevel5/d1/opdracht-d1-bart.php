


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
<th></th>
<th></th>
<?php 
foreach($allestudenten as $a){ ?>

    <tr>
    <td><?php echo $a["voornaam"] ?></td>
    <td><?php echo $a["achternaam"] ?></td>
    <td><?php echo $a["woonplaats"] ?></td>
    <td><button><a href="delete.php?id=<?php echo$a['klant_id']?>">delete</a></button></td>
    <td><button><a href="update.php?id=<?php echo $a['klant_id']?>">update</a></button></td>
    </tr>
    <?php
}
?>
</table>
</body>
</html>