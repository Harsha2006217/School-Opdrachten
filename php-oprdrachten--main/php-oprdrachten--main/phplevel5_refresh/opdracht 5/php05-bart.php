<?php

function netEuro($getal){
    $formatted = sprintf("%0.2f", $getal);
 
    return $formatted;
}

echo "€".netEuro(12);
echo "<br>";
echo "€".netEuro(12.5);
echo "<br>";
echo "€".netEuro(12.6666);

?>