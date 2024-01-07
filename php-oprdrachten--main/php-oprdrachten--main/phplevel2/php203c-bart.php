<?php
$array = [12,3,21,5,3,20]; 
$array2 = [12,3,21,5,3,20,21,3,2,1,-4,0];
$array3 = [2,1];
$array4 = [0,0];
$array5 =[2];


function hoogstegetallen($aray){
    #sorteerd de getallen van laag naar hoog
    rsort($aray);

    # telt de getallen bij elkaar op
    $answer = $aray[0]  + $aray[1];

    #returned de uitkomst
    return $answer;
}


hoogstegetallen($array);
echo "<br>";
hoogstegetallen($array2);
echo "<br>";
hoogstegetallen($array3);
echo "<br>";
hoogstegetallen($array4);
echo "<br>";
hoogstegetallen($array5);
# hij errort op $array5 haal die weg als je de rest wil zien ik heb bewijs voor de andere 4 toegevoegd
echo "done";

?>