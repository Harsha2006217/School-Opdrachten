<?php

$mijnArray = ['julian', 'thomas', 'alex', 'merijn', 'mitch', 'renzo', 'yvo', 'dwight', 'jeremy', 'bart'];

foreach($mijnArray as $persoon)
{
    echo "$persoon";
    echo '<br>';

    if ($persoon == 'bart') {
        echo '!';
    }
}

?>