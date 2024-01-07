<?php

include "database.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="index1.css" rel="stylesheet">
</head>
<body>

<?php

        $sql = "SELECT * FROM telaat";
        
        $result = $conn->query($sql);
        $result -> fetch_all(MYSQLI_ASSOC);
?>
    <h1 id="title">Overzicht studenten die te laat waren</h1>
    <table class="table table-dark table-striped">
        <tr>
            <th>naam</th>
            <th>klas</th>
            <th>aantal minuten te laat</th>
            <th>reden om te laat zijn</th>
            <th></td>
            <th></td>
        </tr>   
       <?php

        if ($result->num_rows > 0) {

            foreach($result as $row){?>
            <tr>
                <td><?php echo $row['naam']; ?></td>
                <td><?php echo $row['klas']; ?></td>
                <td><?php echo $row['telaat_min']; ?></td>
                <td><?php echo $row['reden']; ?></td>
                <td><button><a href="delete.php?id=<?php echo $row['id']; ?>">verwijder</a></button></td>
                <td><button><a href="update.php?id=<?php echo $row['id']; ?>">update</a></button></td>

            </tr>  
<?php
          
                 }
        }
?>  

    </table>
    <button id="weer"><a href="formulier.php">weer eentje te laat!</a></button>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>


