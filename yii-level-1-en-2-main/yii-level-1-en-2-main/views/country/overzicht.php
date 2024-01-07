
<table>
<?php

     echo  "<th><b>naam</b></th>";
     echo "<th></th>";
     echo "<th><b>oppervlakte</b></th>";
    foreach ($countries as $country) {
        echo "<tr>";
        echo "<td>".$country->Name."</td>";
        echo "<td>".$country->Code."</td>";    
        echo "<td>".$country->SurfaceArea."</td>";
       // echo "<td>".$country->hoofdstad->Name."</td>";  
        
        echo "</tr>";
    }
?>
</table>






