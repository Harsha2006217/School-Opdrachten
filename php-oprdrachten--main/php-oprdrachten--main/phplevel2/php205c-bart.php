<?php 
$k=0;
for($i=0; $i<=100; $i+=1){
    $k += $i;
    if ($i == 100){
        echo " =$k";
    } 
    else{ 
    echo "$i +";
    }
 
}
?>