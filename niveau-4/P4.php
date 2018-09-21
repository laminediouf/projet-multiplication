<?php
    

    for($i =0 ; $i <= 11 ; $i++)
    {
        if(isset($_POST['check_'.$i]))
        {
            $alea=rand(0,10);
            $recup=$_POST['check_'.$i];
            $result=$alea*$recup;
            echo $alea*$recup;

          /*  $multiplicaton = $_POST['check_'.$i];
            echo "<h2>Table de ".$i."<br>";
            for($o=0; $o<11; $o++)
            {
               echo $multiplicaton."x".$o."==".$multiplicaton*$o."<br>";
            } */
        }
        
    }
   

