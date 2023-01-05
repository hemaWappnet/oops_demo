<?php
//PHP program to demonstrate MultiLevel inheritance.
class Base
{
    function BaseFun()
    {
        echo "BaseFun() called<br>";
    }

    function __construct(){
        echo "Base Class called<br>";
    }
}

class Derived1 extends Base
{
    function Derived1Fun()
    {
        echo "Derived1Fun() called<br>";
    }

    function __construct(){
        echo "Derived1 Class called<br>";
    }
}

class Derived2 extends Derived1
{
    function Derived2Fun()
    {
        echo "Derived2Fun() called<br>";
    }

    function __construct(){
        echo "Derived2 Class called<br>";
    }
}

$dObj = new Derived2();

$dObj->BaseFun();
$dObj->Derived1Fun();
$dObj->Derived2Fun();

?> 

