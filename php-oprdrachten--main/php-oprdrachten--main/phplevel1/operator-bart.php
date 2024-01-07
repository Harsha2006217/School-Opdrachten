<?php

$dagVanDeWeek='za';
$feestdag='nee';
$vrijeDag='nee';

//De dag van de week 'ma' is én er geen feestdag is.
if ($dagVanDeWeek == 'ma' && $feestdag == 'nee') {
	echo "Advies is om 06:30 uur op te staan";
//De dag van de week 'ma'of 'di'of 'wo' of 'do' of 'vr' is.
if ($dagVanDeWeek == 'ma' || 'di' || 'wo' || 'do' || 'vr') {
    echo "Advies is om 06:30 uur op te staan";
    }
//De dag van het week geen zaterdag of zondag is.
if ($dagVanDeWeek !== "za" || 'zo') {
    echo "Advies is om 06:30 uur op te staan";
        }
//De dag van de week 'ma' is én er geen feestdag is én er geen vrije dag is.
if ($dagVanDeWeek == 'ma' && $feestdag == 'nee' && $vrijeDag == 'nee') {
        echo "Advies is om 06:30 uur op te staan";
            }
//De dag van de week 'ma' of 'wo' is én er geen feestdag is én er geen vrije dag is.
if ($dagVanDeWeek == 'ma' || 'wo' && $feestdag == 'nee' && $vrijeDag == 'nee') {
        echo "Advies is om 06:30 uur op te staan";
                }

} else {
	echo "Lekker uitslapen";
}

?>