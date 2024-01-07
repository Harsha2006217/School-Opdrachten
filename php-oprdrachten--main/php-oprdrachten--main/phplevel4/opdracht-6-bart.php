<?php

class scooter{
    public $kleur;
    public $merk;
    public $Inhoudtank;
    public function isdetankvol(){
        if ($this->Inhoudtank == 0){
            echo "de tank is leeg! <br>";
        }
        else{
            echo "de tank zit vol! <br>";
        }
    }
}


$piago = new scooter();

$piago->kleur = 'rood';
$piago->merk = 'piago';
$piago->Inhoudtank = 6;



$peugeot = new scooter();

$peugeot->kleur = 'zwart';
$peugeot->merk = 'peugeot';
$peugeot->Inhoudtank = 7;


$peugeot->isdetankvol();
$piago->isdetankvol();

?>

