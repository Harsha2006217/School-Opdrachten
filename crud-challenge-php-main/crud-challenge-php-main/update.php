<?php

include "database.php";

if(isset($_GET["id"])){
    $id = $_GET["id"];
}

$sql = "SELECT * FROM telaat WHERE id = $id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output the row
    $row = $result->fetch_assoc();
} else {
    echo "No results found.";
}

//result pdo FETCH_BOTH -> rij
//result fetch_all(pdo)
?>
<html>
<head>
<link href="index1.css" rel="stylesheet">
</head>
    <body>
        <h2>update hier je gegevens!</h2>
        <form action="updatehandler.php" method="$_GET">
            <div class="form_property">
                <label>wat is de naam van de leerling?</label><br>
                <input type="text" id="quantity" name="naam" value="<?php echo  $row['naam']?>" maxlength="30" required>
                <br><br>
                <label>in welke klas zit de leerling</label><br>
                <input type="text" name="klas"maxlength="3" value=" <?php echo  $row['klas'] ?>" required>
                <br><br>
                <label>hoeveel minuten is de leerling te laat</label><br>
                <input type="number" name="telaat_min" value="<?php echo $row['telaat_min'] ?>" min=0 max=999 required>
                <br><br>
                <label>wat is de reden dat de leerling te laat is?</label><br>
                <input type="text" name="reden" value="<?php echo $row['reden'] ?>" maxlength="255" required><br><br>
                <input type="submit">
                <input type="hidden" name="id" value="<?php echo $id ?>">
            </div>        
        </form>
    </body>
</html>