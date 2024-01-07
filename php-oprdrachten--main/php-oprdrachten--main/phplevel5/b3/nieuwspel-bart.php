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
        .test{
            margin: 20px 10px 0px;
        }

        form{
            display: inline-block;
            border: 1px solid black;
            width: 300px;
            padding: 20px;
        }

        label{
            margin: 10px;
        }
    </style>
    <form action="voegtoe-bart.php" method="post">
        <div class="test">
            <label>titel: </label>
            <input type="text" required name="titel">
        </div>
        
        <div class="test">
            <label>uitgever: </label>
            <input type="text" name="uitgever" required>
        </div>
        
        <div class="test">
            <label>platform: </label>
            <select required name="platform">
                <option value="pc">pc</option>
                <option value="ps5">ps5</option>
                <option value="xbox">xbox</option>
                <option value="switch">switch</option>
            </select>
        </div>
        
        <div class="test">
            <label>voorraad: </label>
            <input type="text" required name="voorraad">
        </div>
        
        <div class="test">
            <label>prijs: </label>
            <input type="text" required name="prijs">
        </div>

        <input type="submit" value="verstuur!" class="test">
    </form>
</body>
</html>

