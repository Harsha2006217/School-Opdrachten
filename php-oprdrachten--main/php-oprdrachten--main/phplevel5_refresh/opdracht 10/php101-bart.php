<?php
function breekAf($maxLengte, $string) {
    $woorden = explode(" ", $string);
    $output = "";
    foreach ($woorden as $woord) {
        if (strlen($output . " " . $woord) <= $maxLengte) {
            $output .= " " . $woord;
        } else {
            break;
        }
    }
    return trim($output). "<br>";
}

$opmerking = "Deze student is erg goed in programmeren in PHP";

echo breekAf(32, $opmerking);
echo breekAf(18, $opmerking);
echo breekAf(19, $opmerking);
echo breekAf(20, $opmerking);
echo breekAf(11, $opmerking);
echo breekAf(24, $opmerking);
echo breekAf(3, $opmerking);

?>