<?php

Class Mobile{
    public function battery(){
        echo 'I am Battery. ';
    }
}

trait Laser{
    public function power(){
        echo '<br>Laser Power is 10mW.';
    }
}

trait Projector{
    public function range(){
        echo '<br>Range is 2m.';
    }

    public function power(){
        echo '<br>I am the power of Projector';
    }

    public function hello(){
        echo '<br>Hello there!';
    }
}

Class Galaxy extends Mobile{
    use Laser, Projector{
        Laser::power insteadOf Projector;

        Projector::power as Ppower;
    }
}

//priority for Function call
//1) Current Class
//2) Trait
//3) Sub Trait

$obj = new Galaxy();
$obj->battery();
$obj->power();
$obj->range();
$obj->hello();
$obj->Ppower();

?>