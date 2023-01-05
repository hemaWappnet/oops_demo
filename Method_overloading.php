<?php 
   //here i am use __call() function for overloading in php
   class Shape {
      function __call($name,$arg){
         if($name == 'area')
            switch(count($arg)){
               case 0 : return 0 ;
               case 1 : return $arg[0]*$arg[0] ;
               case 2 : return $arg[0] * $arg[1];
               case 3: return ($arg[0] * $arg[1] * $arg[2]);
            }
      }
   }
$square = new Shape();
echo "Area of Square= ".$square ->area(3);
$rect = new Shape();
echo "\nArea of Rectangle = ".$rect->area(8,6);
$volume = new Shape();
echo "\nVolume of Rectangle = ".$volume->area(2,3,4);

?>
