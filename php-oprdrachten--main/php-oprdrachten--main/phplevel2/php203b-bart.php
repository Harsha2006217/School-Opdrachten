<?php


function fnaarc($gradencelsius){
    $farenheit = ($gradencelsius * 9/5) +32;
    return($farenheit);
}

echo fnaarc(4);
echo fnaarc(6);

?>