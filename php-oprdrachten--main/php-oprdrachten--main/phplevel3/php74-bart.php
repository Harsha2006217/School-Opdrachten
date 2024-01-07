<?php


function mijnFunctie($array) {
    $count = 0;
    foreach($array as $a){
        $count += $a;
        
    }
    echo $count;
    
}

echo"mijnFunctie([3,2,1]); ";
mijnFunctie([3,2,1]);

echo "<br>";
echo"mijnFunctie([1,12,3,1,2]); ";	
mijnFunctie([1,12,3, 1, 2]);
echo "<br>";
echo"mijnFunctie([1,12,3,1,2,1]); ";
mijnFunctie([1,12,3, 1, 2, 1]);
echo "<br>";
echo"mijnFunctie([2,4]); ";
mijnFunctie([2,4]);
echo "<br>";
echo"mijnFunctie([4]); ";	
mijnFunctie([4]);
echo "<br>";




?>