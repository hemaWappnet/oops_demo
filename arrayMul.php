<?php

$a = array(10,20,30,40,50);
$b = array(10,20,30,40,50,60,70,80,90,100);

foreach($a as $n1){
    foreach($b as $n2){
        echo $n1." multiply by ".$n2." is:".$n1*$n2."<br>";
    }
    
}

?>
