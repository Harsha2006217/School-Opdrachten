<?php echo $_POST["radio"]. "<br>"; ?>
<?php echo $_POST["bandenspanning"]. "<br>" ; ?>
<?php echo $_POST["afstand"]. "<br"; ?>

<?php


$voertuig =  $_POST["radio"];
$bandenspanning = $_POST["bandenspanning"];
$afstand =  $_POST["afstand"];
$vertraging =  $_POST["vertraging"];


class voertuig{
    public $maximale_snelheid;
    public $spanning;

}


class scooter extends voertuig{
    public $scooter_soort;
    public function bromscooter($status = 'bromscooter'){
        $this->soort = $status; 
    }
    
    public function snorscooter($status = 'snorscooter'){
        $this->soort = $status; 
    }
}


class fiets extends voertuig{
    public $fiets_soort;
    
}

if ($voertuig == 'bromscooter'){
    bromscooter()
    
}



?>