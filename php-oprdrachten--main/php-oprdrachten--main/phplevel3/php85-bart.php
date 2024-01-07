<?php
$uitslagen=[
    [ 'thuis' => 'FC Twente', 'uit' => 'FC Utrecht', 'uitslag' => [0,1] ],
    [ 'thuis' => 'FC Twente', 'uit' => 'FC Volendam', 'uitslag' => [3,1] ],
    [ 'thuis' => 'FC Emmen', 'uit' => 'Feyenoord', 'uitslag' => [0,3] ],
    [ 'thuis' => 'Vitesse', 'uit' => 'FC Twente', 'uitslag' => [1,1] ],
];
$wedstrijd_count = 0;
$count = 0;
foreach($uitslagen as $y){
        $wedstrijd_count += 1;
        $optellen = $y["uitslag"][0];
        echo "wedstrijd $wedstrijd_count de thuisploeg krijgt $optellen punten";
        echo "<br>";
        
}

    



?>