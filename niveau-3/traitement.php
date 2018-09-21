<?php
$resultat=$_GET['result'];
$reponse=$_POST['num'];
       
        if($resultat==$reponse)
        {
            echo "Bonne reponse";
        }
        else{
            echo "Mauvaise Reponse";
        }
        


?>