<?php


class lamp{
    public $kleur;
    public $helderheid;
    private $IsAan;
    public function setStatus($status){
        $this->IsAan = $status; 
        echo "test";
    }
}


$keukenlamp = new lamp();
$woonkamerlamp = new lamp();



$woonkamerlamp->setStatus('uit');
?>