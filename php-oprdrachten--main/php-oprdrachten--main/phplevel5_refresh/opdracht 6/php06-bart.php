<?php
$PHPCijfers=[4,5,4,5,6,6,5,8,7,6,4,8];

function onvoldoendes($array) {
    $onvoldoendes = [];
    foreach($array as $a){
        if($a <= 5){
            array_push($onvoldoendes, $a);
        }
    }
    return $onvoldoendes;
  }
  

  print_r( onvoldoendes([6,6,7]) );
  echo "<br>";
  print_r( onvoldoendes([6,3,6,7]) );
  echo "<br>";
  print_r( onvoldoendes($PHPCijfers) );


?>