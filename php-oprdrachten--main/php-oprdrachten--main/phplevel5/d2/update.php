<?php
require "database-connectie-bart.php";

if(isset($_GET["id"])){
    $id = $_GET["id"];
}


$sql = "SELECT * FROM klanten where klant_id = $id";
$update = $conn1->query($sql);
$result = $update->fetchAll();
$voornaam = $result[0][1];
$achternaam = $result[0][2];
$woonplaats = $result[0][4]


?>
<html>
<head>
<link href="index1.css" rel="stylesheet">
</head>
    <body>
        <h2>update hier je gegevens!</h2>
        <form action="update_handeler.php" method="$_GET">
            <div class="form_property">
                <label>wat is de naam van de leerling?</label><br>
                <input type="text" name="voornaam" value="<?php echo $voornaam?>" maxlength="30" required>
                <br><br>
                <label>in welke klas zit de leerling</label><br>
                <input type="text" name="achternaam"maxlength="3" value="<?php echo $achternaam ?>" required>
                <br><br>
                <label>wat is de reden dat de leerling te laat is?</label><br>
                <input type="text" name="woonplaats" value="<?php echo $woonplaats ?>" maxlength="255" required><br><br>
                <input type="hidden" name="id" value="<?php echo $id ?>">
                <input type="submit">
                
            </div>        
        </form>
    </body>
</html>
