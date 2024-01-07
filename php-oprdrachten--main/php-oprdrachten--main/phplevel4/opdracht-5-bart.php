<?php



class dier{
    public $lengte ;
    public $gewicht ;
    public $aantal_poten;
    public $aantal_ogen; 
}



class spinnen extends dier{
    public $spinnen_soort;
}

class boerderij_dieren extends dier{
    public $levert_op;
}


$kruisspin = new spinnen();

$kruisspin->aantal_poten = 8;
echo $kruisspin->aantal_poten;
echo "<br>";

$kruisspin->aantal_ogen = 4;
echo $kruisspin->aantal_ogen;
echo "<br>";

$kruisspin->spinnen_soort = 'geleedpotigen';
echo $kruisspin->soort;
echo "<br>";


$kruisspin->lengte = '10cm';
echo $kruisspin->lengte;
echo "<br>";


$kruisspin->$gewicht = '10gram';
echo $kruisspin->gewicht;
echo "<br>";


echo "<br>"; 

$varken = new boerderij_dieren();

$varken->aantal_poten = 4;
echo $varken->aantal_poten;
echo "<br>";


$varken->aantal_ogen = 2;
echo $varken->aantal_ogen;
echo "<br>";

$varken->soort = 'boerderijdier';   
echo $varken->soort;
echo "<br>";

$varken->lengte = '150cm';
echo $varken->lengte;
echo "<br>";


$varken->$gewicht = '40000gram';
echo $varken->gewicht;
echo "<br>";


?>
