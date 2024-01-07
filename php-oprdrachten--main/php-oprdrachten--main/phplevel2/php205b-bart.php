<?php
$myColors=[ 'rood','paars','oranje','blauw','wit' ];

for($i=0; $i<5; $i++) {
    echo "$myColors[$i]";
    echo "<br>";
}




foreach($myColors as $item) {
    echo "$item";
    echo "<br>";
}




?> 