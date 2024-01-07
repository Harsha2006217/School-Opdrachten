<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Document</title>
</head>
<!DOCTYPE html>
<html lang="en">
<head>
 <link href="index1.css" rel="stylesheet">

    <title>Document</title>
</head>
    <body>
        <h2>vul hier de gegevens in!</h2>
        <form action="formulierhandler.php" method="get">
            <div class="form_property">
                <label>wat is de naam van de leerling?</label><br>
                <input type="text" id="quantity" name="naam" placeholder="naam van de leerling" maxlength="30" class="form-control" id="exampleFormControlInput1" required>
                <br><br>
                <label>in welke klas zit de leerling</label><br>
                <input type="text" name="klas" placeholder="klas" maxlength="3" class="form-control" id="exampleFormControlInput1" required>
                <br><br>
                <label>hoeveel minuten is de leerling te laat</label><br>
                <input type="number" name="telaat_min" placeholder="hoeveel minuten te laat" min=0 max=999 class="form-control" id="exampleFormControlInput1" required>
                <br><br>
                <label>wat is de reden dat de leerling te laat is?</label><br>
                <input type="text" name="reden" placeholder="reden" maxlength="255" class="form-control" id="exampleFormControlInput1" required><br><br>
                <input type="submit">
            </div>        
        </form>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
</html>