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
        #test{
            display: block;
        }

        tr{
            border: 5px solid black;
        }

    </style>
</body>
</html>

<?php
use yii\helpers\Html;
 echo "<table border='1'>";
 echo  "<th><b>naam</b></th>";
 echo "<th><b>hoofdstad</b></th>";
 echo "<th><b>oppervlakte</b></th>";
 
 //echo "<th><b>taal</b></th>";
 //_dd($countries);



foreach($countries as $country){
    $empty_array = [];
    echo "<tr>";
    echo "<td>".$country->Name."</td>";
    echo "<td>".Html::a($country->hoofdstad->Name, ['/city/view', 'ID' => $country->hoofdstad->ID])."</td>";
    echo "<td>".$country->SurfaceArea."</td>";
    foreach( $country->countrylanguages as $taal) {
        $empty_array[$taal->Language]=$taal->Percentage;
        arsort($empty_array, SORT_NUMERIC);
        //bartph
        if(sizeof($empty_array) == 5){
        foreach($empty_array as $x => $x_value){
        //echo "<td id = 'test'>".$x."(".$x_value."%)"."</td>";
        }

        
    }
    }
    echo "</tr>";
    
}
echo "</table>";
?>