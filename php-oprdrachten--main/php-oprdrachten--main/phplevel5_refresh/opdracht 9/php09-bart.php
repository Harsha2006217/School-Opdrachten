<?php

$string = "Voor de vormgeving is het handig om te weten hoe het eruit komt te zien voordat je daadwerkelijk tekst gaat plaatsen.";
function kleineWoorden($tester, $string1){
$count = 0;
$exploded_string = explode(" ",$string1);
foreach($exploded_string as $a){
    if(strlen($a) < $tester){
        $count += 1;
    }
}
return $count."<br>";
}


echo kleineWoorden(4,"dit is een voorbeeld");	
echo kleineWoorden(3,"dit is een voorbeeld");	
echo kleineWoorden(1,"dit is een voorbeeld");	
echo kleineWoorden(0,"dit is een voorbeeld");	
echo kleineWoorden(2,"a b c d");	
echo kleineWoorden(6,"abcde");	
echo kleineWoorden(4,$string);	
echo kleineWoorden(3,$string);	
echo kleineWoorden(10,$string);

?>