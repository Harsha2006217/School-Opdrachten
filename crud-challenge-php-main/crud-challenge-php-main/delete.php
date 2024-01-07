<?php

include "database.php";


if(isset($_GET["id"])){
    $id = $_GET["id"];
}
?>
<form action="deletehandler.php" method="post">
    <h1>weet je zeker dat je deze data wilt verwijderen?</h1>
    <input type="radio" name="antwoord" id="t" value="ja">
    <label>ja</label>
    <input type="radio" name="antwoord" id="t" value="nee">
    <label>nee</label>
    <input type="hidden" value="<?php echo $id ?>" name="id">
    <input type="submit">
</form>



<?php

?>