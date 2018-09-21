<?php

if(isset($_POST['table']))
{
   $recup= $_POST['table'];
   $alea=rand(0,10);
   $result=$recup*$alea;
   echo  "<h2>donnez le resultat de l''operation suivante:</h2>";
   echo  $recup." * ".$alea."=";
   

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="POST" action="traitement.php?result=<?= $result ?>">
<input type="text" name="num">
<button name="btn" value="valider">Valider</button>
</form>    
</body>
</html>