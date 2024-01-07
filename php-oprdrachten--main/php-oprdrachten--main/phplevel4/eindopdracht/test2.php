<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="index1.css" rel="stylesheet">
</head>
<body>
<div class="answer_background">
<?php

#voertuig 1 


class voertuig{
    public $maximale_snelheid;
    public $spanning;

}


class scooter extends voertuig{
    public $soort;
    public function bromscooter($status = 'bromscooter'){
        $soort = 0;
        $this->$soort = $status; 
    }
    
    public function snorscooter($status = 'snorscooter'){
        $soort = 0;
        $this->$soort = $status; 
    }
}


class fiets extends voertuig{
    public $fiets_soort;
    
}

$voertuig1 = new voertuig();
$voertuig2 = new voertuig();

$numChunks = ceil(count($_POST) / 2);
$chunks = array_chunk($_POST, $numChunks);

$value1 = $chunks[0];
$value2 = $chunks[1];



$voertuig1->spanning = $value1[1];
$voertuig2->spanning = $value2[1];


//voertuig 1 -------------------------------------------------------------------------------
if ($value1[0] == 'bromscooter'){
    $maximale_snelheid = 45;
    $spanning = $voertuig1->spanning / 100; 
    $snelheid = ($spanning * $maximale_snelheid); 
    $tijd = $value1[1] / ($snelheid/60) + $value1[2]; 
} 

if ($value1[0] == 'snorscooter'){
    $maximale_snelheid = 25;
    $spanning = $voertuig1->spanning / 100;  // 0,8
    $snelheid = ($spanning * $maximale_snelheid); // 36
    $tijd = $value1[2] / ($snelheid/60) + $value1[2];
    
}

if ($value1[0] == 'fiets'){
    $maximale_snelheid = 15;
    $spanning = $voertuig1->spanning / 100;  // 0,8
    $snelheid = ($spanning * $maximale_snelheid); // 36
    $tijd = $value1[2] / ($snelheid/60) + $value1[2];
}

if ($value1[0] == 'efiets'){
    $maximale_snelheid = 25;
    $spanning = $voertuig1->spanning / 100;  // 0,8
    $snelheid = ($spanning * $maximale_snelheid); // 36
    $tijd = $value1[2] / ($snelheid/60) + $value1[2];
}

//voertuig 2 ----------------------------------------------------------

if ($value2[0] == 'bromscooter'){
    
    $maximale_snelheid = 45;
    $spanning = $voertuig1->spanning / 100; 
    $snelheid = ($spanning * $maximale_snelheid); 
    $tijd1 = $value1[2] / ($snelheid/60) + $value1[2]; 
    
}

if ($value2[0] == 'snorscooter'){
    
    $maximale_snelheid = 25;
    $spanning = $voertuig1->spanning / 100;  // 0,8
    $snelheid = ($spanning * $maximale_snelheid); // 36
    $tijd1 = $value1[2] / ($snelheid/60) + $value1[2];
    
}

if ($value2[0] == 'fiets'){
    
    $maximale_snelheid = 15;
    $spanning = $voertuig1->spanning / 100;  
    $snelheid = ($spanning * $maximale_snelheid); 
    $tijd1 = $value1[2] / ($snelheid/60) + $value1[2];
}



if ($value2[0] == 'efiets'){
    $maximale_snelheid = 25;
    $spanning = $voertuig1->spanning / 100;  // 0,8
    $snelheid = ($spanning * $maximale_snelheid); // 36
    $tijd1 = $value1[2] / ($snelheid/60) + $value1[2];
}




if ($tijd > $tijd1){
    $hoogste = $value2[0];
}
if ($tijd1 > $tijd){
    $hoogste = $value1[0];
}

?> 


<div class="vergelijking">
    <p class="t">je doet er met de <?php echo $value1[0] ?> <?php echo round($tijd, 1) ?> minuten over</p>
    <p class="t u">je doet er met de <?php echo $value2[0] ?>  <?php echo round($tijd1, 1) ?> minuten over</p>
    <P class="advies">je kan het best met het <?php echo $hoogste ?> gaan <br> het tijdsverschil is <?php echo "$tijd - $tijd1= ". round($tijd - $tijd1, 1). " minuten" ?></p>
</div>





<button class = 'button'><a href="test.html">bereken nog een keer!</a></button>
</div>
</body>
</html>