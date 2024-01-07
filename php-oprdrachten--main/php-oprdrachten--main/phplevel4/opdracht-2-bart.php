<?php


class Auto{
    public $merk;
    public $kleur;
    public $type;
    public $uitvoering ;
    public $brandstof;
}


$nieuweauto = new Auto();
$nieuweauto->merk = 'volkswagen';
$nieuweauto->kleur = 'rood';
$nieuweauto->type =  'Golf';
$nieuweauto->uitvoering = 'station';
$nieuweauto->brandstof = 'benzine';


echo $nieuweauto->merk;
echo "<br>";
echo $nieuweauto->kleur;
echo "<br>";
echo $nieuweauto->type;
echo "<br>";
echo $nieuweauto->uitvoering;
echo "<br>";
echo $nieuweauto->brandstof;
echo "<br>";

?>