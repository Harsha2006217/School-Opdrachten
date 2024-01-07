<?php
$dagVanDeWeek=[ 'ma','di','wo','do','vr','za','zo' ];
$vrijeDag=[ 'ja', 'nee'];

echo "<table border=1>";
echo "<th>dag</th><th>vrij dag</th><th>advies</th>";

foreach($dagVanDeWeek as $dag) {
  foreach($vrijeDag as $vd) {

    echo "<tr>";
    echo "<td>$dag</td><td>$vd</td><td>";
    if ( $dag == 'ma' || $dag == 'di' || $dag == 'wo' || $dag == 'do' || $dag == 'vr' ) {
      echo "06:30 uur op staan";
    } else {
      echo "uitslapen";
    }

    echo "</td>";
  }
}
echo "</table>";
?>