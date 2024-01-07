
<style>

b{
    color: red;
}

</style>
<?php
echo "for-loop <br>";
for($x=0; $x <= 20; $x++){
    if($x == 0){
        echo "<b>".$x."</b>";
    }
    else{
    echo "<b>-".$x."</b>";
    }
}

echo "<br>";
echo "while-loop <br>";
$t = 0;
while($t <= 20){
    if($t == 0){
        echo "<b>".$t."</b>";
        $t++;
    }
    else{
    echo "<b>-".$t."</b>";
    $t++;
    }
}



?>