<?php


function berekenScore($uitslagen){
$punten = 0;
foreach($uitslagen as $wedstrijd){
    if($wedstrijd[0] > $wedstrijd[1]){
        $punten += 3;
    }

    if ($wedstrijd[0] == $wedstrijd[1]){
        $punten += 1;
    }

    if ($wedstrijd[0] < $wedstrijd[1]){
        $punten += 0;
    }
}
return $punten;
}

echo berekenScore([ [1,3], [4,0], [0,0] ,[1,1],[0,2] ]);
echo "<br>";
echo berekenScore([ [1,1], [0,0], [0,2] ,[1,1],[0,2] ]);
echo "<br>";
echo berekenScore([ [1,1], [0,0], [0,0] ,[1,1],[2,2] ]);
echo "<br>";
echo berekenScore([ [1,0], [1,0], [2,0] ,[1,1],[0,2] ]);


?>