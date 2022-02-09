<ul>
<?php

$klassen = array("8A", "8B", "8C", "8D", "8E", "9A", "9B", "9C", "9D", "9E");
echo "<fieldset style='border: solid 1px; width:150px;'><legend> klassenformulier </legend>";

 echo "Ik zit in klas <select>";
foreach ($klassen as $value){
    echo "<option value=$value> $value</option>";
    
   }
echo "</select> </br>";
echo "<button> Verzend </button>";
echo "</fieldset>"

?>
</ul>