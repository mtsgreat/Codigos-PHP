<?php
    
  
    $ini = $_GET["inicio"];
    $fi = $_GET["fim"];
    $incre = $_GET["incremento"];


    while($ini <= $fi){
        echo $ini;
        $ini += $incre;
    }


    





?>