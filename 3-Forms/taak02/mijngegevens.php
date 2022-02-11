<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <title>Document</title>
    <form action="mijngegevens.php" method="POST">
    <style>
        <?php 
            $test = $_POST['lievelingskleur'];
            echo "body{background-color:$test;}"
        ?>
    </style>
</head>
<body>

<?php
echo "Voornaam is:". $_POST["Voornaam"];
echo "</br>";
echo "Achternaam is:". $_POST["Achternaam"];
echo "</br>";
echo "Klas is:". $_POST["Klas"];
echo "</br>";
echo "Leeftijd is:". $_POST["Leeftijd"];
echo "</br>";
echo "Adres is:". $_POST["Adres"];
echo "</br>";
echo "Plaatsnaam is:". $_POST["Plaatsnaam"];
echo "</br>";
echo "Favoriete muziekband is:" . $_POST["Favorietemuziekband"];
echo "</br>";
echo "Geslacht is : " . $_POST["gender"];


?>

</body>
</html> 

