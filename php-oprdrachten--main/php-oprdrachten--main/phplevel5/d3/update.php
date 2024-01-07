<?php
require "database-connectie-bart.php";

if(isset($_GET["voornaam"])){
    $voornaam = $_GET["voornaam"];
}

if(isset($_GET["achternaam"])){
    $achternaam = $_GET["achternaam"];
}

if(isset($_GET["woonplaats"])){
    $woonplaats = $_GET["woonplaats"];
}

?>
<html>
<head>
<link href="index1.css" rel="stylesheet">
</head>
    <body>
        <h2>update hier je gegevens!</h2>
        <form action="update_handler.php" method="$_GET">
            <div class="form_property">
                <label>wat is de naam van de leerling?</label><br>
                <input type="text" id="quantity" name="naam" value="<?php echo  $voornaam?>" maxlength="30" required>
                <br><br>
                <label>in welke klas zit de leerling</label><br>
                <input type="text" name="klas"maxlength="3" value=" <?php echo  $achternaam ?>" required>
                <br><br>
                <label>wat is de reden dat de leerling te laat is?</label><br>
                <input type="text" name="reden" value="<?php echo $woonplaats ?>" maxlength="255" required><br><br>
                <input type="submit">
                
            </div>        
        </form>
    </body>
</html>
