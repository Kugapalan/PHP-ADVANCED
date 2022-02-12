<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>

<?php

function rekenUit($Getal1,$Getal2,$Getal3){

 $antwoord =$Getal1 + $Getal2 + $Getal3;

 return $antwoord;
}

$opdracht1 =rekenUit(20, 44 , 46);
$opdracht2 =rekenUit (77, 63 , 21);
$opdracht3 =rekenUit (42, 31 , 12);

echo "Als ik de getallen 20, 44 , 46 bij elkaar optel, is de uitkomst $opdracht1 ";
echo "</br>";
echo "Als ik de getallen 77, 63 , 21 bij elkaar optel, is de uitkomst $opdracht2 ";
echo"</br>";
echo "Als ik de getallen 42, 31 , 12 bij elkaar optel, is de uitkomst $opdracht3 ";

?>