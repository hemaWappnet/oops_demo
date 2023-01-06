<?php

 class A{
    //to get number and name of any employee, number is integer $n and name is String $name
    function Display(int $n,String $name): int|String{
        echo "Employee number:".$n."<br>Employee name:".$name;
        return $n.$name;
    }

 }
 
 $add=new A();
 $add->Display(92,'Hema');

?>