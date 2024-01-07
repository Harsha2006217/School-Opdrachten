<?php
$dagVanDeWeek=[ 'ma','di','wo','do','vr','za','zo' ];
$vrijeDag=[ 'ja', 'nee'];

echo "<table border=1>";
echo "<th>dag</th><th>vrij dag</th><th>advies</th>";

foreach($dagVanDeWeek as $dag) {
  foreach($vrijeDag as $vd) {

    echo "<tr>";
    echo "<td>$dag</td><td>$vd</td><td>";

    // je moet vroeg opstaan op maandagen als het geen vrije dag is
    if ( $dag == "ma" && $vd == 'nee') {
      echo "06:30 uur op staan";
    } else {
      echo "uitslapen";
    }

    echo "</td>";
  }
}
echo "</table>";

?>