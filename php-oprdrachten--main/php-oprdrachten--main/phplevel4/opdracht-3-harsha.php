<?php

class Product{
    public $prijs;
    public $merk;
    public $kleur;
    public $type;
}


$dweil = new Product();

$dweil->prijs = 10;
$dweil->merk = 'hema';
$dweil->type = 'lang';
$dweil->kleur = 'rood';



$stofzuiger = new Product();

$stofzuiger->merk = 'aegon';
$stofzuiger->prijs = 50;
$stofzuiger->type = 'gfs505';
$stofzuiger->kleur = 'grijs';

echo $stofzuiger->merk; 
echo "<br>";
echo $stofzuiger->prijs; 
echo "<br>";
echo $stofzuiger->type;
echo "<br>";
echo $stofzuiger->kleur;
echo "<br>";
echo "<br>";


echo $dweil->prijs;
echo "<br>";
echo $dweil->merk ;
echo "<br>";
echo $dweil->type ;
echo "<br>";
echo $dweil->kleur;
echo "<br>";
?>
