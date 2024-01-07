<?php


function mijnFunctie($input1, $input2, $input3) {
    
    
    $antwoord = $input1 + $input2 + $input3;
    
    if($antwoord >= 10){
        echo "1";
    }
    if ($antwoord == 0){
        echo "-1";
    }
    if($antwoord < 10 and $antwoord != 0){
        echo "0";
    }
}

echo"mijnFunctie(3,2,1); ";
mijnFunctie(3,2,1);
echo "<br>";
echo"mijnFunctie(1,12,3); ";	
mijnFunctie(1,12,3);
echo "<br>";
echo"mijnFunctie(0,4,0); ";
mijnFunctie(0,4,0);
echo "<br>";
echo"mijnFunctie(7,0,3); ";
mijnFunctie(7,0,3);
echo "<br>";
echo"mijnFunctie(0,0,0); ";	
mijnFunctie(0,0,0);
echo "<br>";


?>