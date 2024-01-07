<?php

// vul waarden in voor de volgende variabelen
$temperatuur= 30;
$prijsBestelling= 40;

// bepaal de $bezorgkosten
$bezorgkosten = 4;
if ($prijsBestelling > 40){
    $bezorgkosten = 0;
}



// bepaal de korting
if ($temperatuur > 21 && $temperatuur < 25){
    $korting = 0.1;
    
}
else if ($temperatuur > 25 && $temperatuur <= 29){
    $korting = 0.15;
}

else if ($temperatuur > 30){
 $korting = 0.3;
 
}   

else {
    $korting = 0;
}

$kortingdef = $prijsBestelling * $korting;



3
 // druk resutlaat af
echo "Bedrag bestelling: $prijsBestelling";
echo "<br>";
echo "Temperatuur dit weekend: $temperatuur";
echo "<br>";
echo "Korting: $kortingdef";
echo "<br>";
echo "Bezorgkosten: $bezorgkosten";
echo "<br>";
echo "<br>";
echo "Eindbedrag: ".$prijsBestelling-$kortingdef+$bezorgkosten;