<?php

class computer{
    public $merk;
    public $hdd_capacity;
    public $memory;
}

$nieuwecomputer = new computer();

$nieuwecomputer->merk = 'asus';
$nieuwecomputer->hdd_capacity = '8k';
$nieuwecomputer->memory = '8gb';


echo $nieuwecomputer->merk;
echo  "<br>" ;
echo $nieuwecomputer->hdd_capacity;
echo  "<br>";
echo $nieuwecomputer->memory;
echo  "<br>";
?>
