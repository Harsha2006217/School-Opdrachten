<?php

function begroeting($naam, $hour1 = 0) {
    if($hour1 == 0){
    $hour = date('H');
    }
    else{
        $hour = $hour1;
    }
    
    if($hour < 12){
        echo "goeiemorgen ".$naam;
    }
    if($hour >= 12 and $hour < 18){
        echo "goeiemiddag ".$naam;
    }
    if($hour >= 18){
        echo "goeieavond ".$naam;
    }
    echo "<br>";
  }
  
  echo begroeting("Vasco", 16);
  echo begroeting("Jesse", 8);
  echo begroeting("Jesse");

?>