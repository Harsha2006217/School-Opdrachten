<?php


function mijnFunctie($input1, $input2, $input3) {
    
    if($input1 == 0 or $input2 == 0 or $input3 == 0){
        echo "0";
    }
    else{
    $antwoord = $input1 + $input2 + $input3;
    echo $antwoord;
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