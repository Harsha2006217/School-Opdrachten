<?php
$uitslagen=[
    [ 'thuis' => 'FC Twente', 'uit' => 'FC Utrecht', 'uitslag' => [0,1] ],
    [ 'thuis' => 'FC Twente', 'uit' => 'FC Volendam', 'uitslag' => [3,1] ],
    [ 'thuis' => 'FC Emmen', 'uit' => 'Feyenoord', 'uitslag' => [0,3] ],
    [ 'thuis' => 'Vitesse', 'uit' => 'FC Twente', 'uitslag' => [1,1] ],
];
$count = 0;
foreach($uitslagen as $y){
    
    
    if($y["thuis"] == "FC Twente"){
        $optellen = $y["uitslag"][0];
        echo "FC Twente scoort $optellen punten";
        echo "<br>";
        
    }
    if($y["uit"] == "FC Twente"){
        $optellen = $y["uitslag"][1];
        echo "FC Twente scoort $optellen punten";
        echo "<br>";
        
    }


}
?>