<?php


class robot{
    private $naam;
    private $geluid;
    private $voortstuwing;
    public function naamsetter($naam1){
        $this->naam = $naam1;
    }
    
    public function geluidsetter($geluid1){
        $this->geluid =  $geluid1;
    }

    public function voortstuwingsetter($voortstuwing1){
        $this->voortstuwing = $voortstuwing1;
    }

    public function getSound(){
        return $this->geluid;
    }
}

$wally = new robot();
$wolly = new robot();

$wally->naamsetter('wally'); 
$wally->geluidsetter('biep');
$wally->voortstuwingsetter('motor');

$wolly->naamsetter('wolly');
$wolly->geluidsetter('boep');
$wolly->voortstuwingsetter('wind');


$wolly->getSound(); 

?>