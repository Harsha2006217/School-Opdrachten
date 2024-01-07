<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="index.css" ref="stylesheet">
</head>
<body style="background-color: gray;">
<?php

$uitslagen1=[
['thuis' => 'Feyenoord', 'uit' => 'FC Twente', 'uitslag'=> [1,2] ],
['thuis' => 'AZ', 'uit' => 'RKC Waalwijk', 'uitslag'=> [1,3] ],
['thuis' => 'PEC Zwolle', 'uit' => 'PSV', 'uitslag'=> [1,2] ],
['thuis' => 'Heracles Almelo', 'uit' => 'Sparta Rotterdam', 'uitslag'=> [1,3] ],
['thuis' => 'sc Heerenveen', 'uit' => 'Go Ahead Eagles', 'uitslag'=> [3,1] ],
['thuis' => 'FC Groningen', 'uit' => 'SC Cambuur', 'uitslag'=> [2,3] ],
['thuis' => 'Vitesse', 'uit' => 'Ajax', 'uitslag'=> [2,2] ],
['thuis' => 'Willem II', 'uit' => 'FC Utrecht', 'uitslag'=> [3,0] ],
['thuis' => 'N.E.C.', 'uit' => 'Fortuna Sittard', 'uitslag'=> [0,1] ],

['thuis' => 'Ajax', 'uit' => 'sc Heerenveen', 'uitslag'=> [5,0] ],
['thuis' => 'RKC Waalwijk', 'uit' => 'Heracles Almelo', 'uitslag'=> [2,0] ],
['thuis' => 'Fortuna Sittard', 'uit' => 'Vitesse', 'uitslag'=> [1,2] ],
['thuis' => 'Sparta Rotterdam', 'uit' => 'PEC Zwolle', 'uitslag'=> [2,0] ],
['thuis' => 'Go Ahead Eagles', 'uit' => 'Feyenoord', 'uitslag'=> [0,1] ],
['thuis' => 'SC Cambuur', 'uit' => 'Willem II', 'uitslag'=> [1,1] ],
['thuis' => 'PSV', 'uit' => 'N.E.C.', 'uitslag'=> [3,2] ],
['thuis' => 'FC Twente', 'uit' => 'FC Groningen', 'uitslag'=> [3,0] ],
['thuis' => 'FC Utrecht', 'uit' => 'AZ', 'uitslag'=> [2,2] ],

['thuis' => 'Feyenoord', 'uit' => 'PSV', 'uitslag'=> [2,2] ],
['thuis' => 'AZ', 'uit' => 'Ajax', 'uitslag'=> [2,2] ],
['thuis' => 'Vitesse', 'uit' => 'sc Heerenveen', 'uitslag'=> [1,2] ],
['thuis' => 'N.E.C.', 'uit' => 'Go Ahead Eagles', 'uitslag'=> [1,0] ],
['thuis' => 'FC Groningen', 'uit' => 'Sparta Rotterdam', 'uitslag'=> [1,2] ],
['thuis' => 'PEC Zwolle', 'uit' => 'FC Utrecht', 'uitslag'=> [1,1] ],
['thuis' => 'Willem II', 'uit' => 'Heracles Almelo', 'uitslag'=> [2,0] ],
['thuis' => 'FC Twente', 'uit' => 'Fortuna Sittard', 'uitslag'=> [1,2] ],
['thuis' => 'SC Cambuur', 'uit' => 'RKC Waalwijk', 'uitslag'=> [1,1] ],
['thuis' => 'N.E.C.', 'uit' => 'Fortuna Sittard', 'uitslag'=> [0,0] ],

];




echo "<table border=1, style=''>";
echo "<tr style='background-color: grey; border: 1px, black;'><th>Thuis</th><th>Uit</th></tr>";
foreach ($uitslagen1 as $u) {
  echo "<tr>";
  echo "<td>".$u['thuis']."</td>";
  echo "<td>".$u['uit']."</td>";
  echo "<td>".$u['uitslag'][0]."</td>";
  echo "<td>".$u['uitslag'][1]."</td>";
  echo "</tr>";
}
echo "</table>";




$punten=[];
$gespeeld=[];
foreach ($uitslagen1 as $uitslag) {
  $punten[$uitslag['thuis']]=0;
  $punten[$uitslag['uit']]=0;
  $gespeeld[$uitslag['thuis']]=0;
  $gespeeld[$uitslag['uit']]=0;
}

// bereken hier de punten en aantal gespeelde wedstrijden per team.

foreach($uitslagen1 as $k){
  $punten[$k["thuis"]]=0; 
}


foreach ($uitslagen1 as $uitslag) {
  
  if ($uitslag['uitslag'][1] > $uitslag['uitslag'][0]) {
    $o = $punten[$uitslag['uit']]; // 0
    $o += 3; // 3


    $punten[$uitslag['uit']] = $o;
  }

  elseif ($uitslag['uitslag'][0] > $uitslag['uitslag'][1]) {
    // Add 3 points to the home team's score
    $o = $punten[$uitslag['thuis']];
    $o += 3;
   // $punten[$uitslag['thuis']] = $o;
  }
 
  else {
    $o = $punten[$uitslag['uit']];
    $o += 1;
    $punten[$uitslag['uit']] = $o;

    $o = $punten[$uitslag['thuis']];
    $o += 1;
    $punten[$uitslag['thuis']] = $o;
  }
}

foreach($uitslagen1 as $y){
  if (array_key_exists($y['thuis'], $gespeeld)){
      $gespeeld[$y['thuis']]+= 1;
  }

  if (array_key_exists($y['uit'], $gespeeld)){
      $gespeeld[$y['uit']]+= 1;
  }
  else{
    $gespeeld[$y['uit']]= 1;
    $gespeeld[$y['thuis']]= 1;
  }
}

arsort($punten);


echo "<br>";
echo "<table border=1, style='background-color: black; color: white;'>";
echo "<tr style=background-color: 'white';><th>Club</th><th>Punten</th><th>Gespeeld</th></tr>";
foreach ($punten as $l => $l_value) {
  echo "<tr>";
  echo "<td>".$l."</td>";
  echo "<td>".$l_value."</td>";
  echo "<td>".$gespeeld[$l]."</td>";
  echo "</tr>";
}   
echo "</table>";



?>

</body>
</html>