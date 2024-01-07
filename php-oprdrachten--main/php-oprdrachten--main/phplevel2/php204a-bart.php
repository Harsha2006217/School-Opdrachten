<?php
$metingenWeek=[ [14,11,12], [ 6,11,11], [7,12,14], [9,14,13], [10,15,13] , [11,15,14 ], [13,16,14] ];
$dagNummer = 0;
$dagNummer1=-1;

foreach($metingenWeek as $dag) {
    $dagNummer += 1;
    $dagNummer1 += 1;
    echo "<br>";
    echo "Dag ".$dagNummer."<br>"; 
    echo "'s ochtends: ".$metingenWeek[$dagNummer1][0]."<br>";
    echo "'s middags : ".$metingenWeek[$dagNummer1][1]."<br>";
    echo "'s avonds  : ".$metingenWeek[$dagNummer1][2]."<br>"; 
    echo "hoogste waarde is ".max($metingenWeek[$dagNummer1]). "<br>";

}

?>