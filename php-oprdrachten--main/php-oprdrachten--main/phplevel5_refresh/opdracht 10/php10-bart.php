<?php


function breekAf($lengte, $string){
    $exploded_string = explode(" ",$string);
    $length = 0;
    $array = [];

    foreach($exploded_string as $a){
        $length += strlen($a);
        //print_r($array);
        //echo  $length."<br>";
        
        if($length >= $lengte){
            foreach($array as $a){
                echo $a." ";
                
             }
             echo $length." | ".$lengte."<br>";
        }
        else{
            array_push($array, $a);
        
        }
        
    } 
    
    echo "<br>";
    
}




echo breekAf(32, "Deze student is erg goed in programmeren in PHP");	
echo breekAf(18, "Deze student is erg goed in programmeren in PHP");
echo breekAf(19, "Deze student is erg goed in programmeren in PHP");	
echo breekAf(20, "Deze student is erg goed in programmeren in PHP");	
echo breekAf(21, "Deze student is erg goed in programmeren in PHP");	
echo breekAf(24, "Deze student is erg goed in programmeren in PHP");	
echo breekAf(3, "Deze student is erg goed in programmeren in PHP");


?>