<?php
    $var = array(2,4,5,6,3);
    
    rsort($var); //Reverce sorting
    sort($var); //Sorting array 
    foreach($var as $item){
        echo $item."<br>";
    }
?>