<form action="" method="get">
<h3>Choose an animal to know more about it:<br>1)Cat<br>2)Dog<br>3)Mouse</h3>
<input type="number" id="n" name="n" />
<button type="submit">SUBMIT</button>
</form>

<?php

abstract class Animals{
    abstract static function about($name);
    
}

class Sounds extends Animals{

    public static function about($n){
        if($n=="CATS"){
            return "MEOW";
        }
        elseif($n=="DOGS"){
            return "BARK";
        }
        elseif($n=="MICE"){
            return "SQUEAK";
        }

    }

}

class Friends extends Animals{

    public static function about($n){
        if($n=="CATS"){
            return "FRIENDLY";
        }
        elseif($n=="DOGS"){
            return "FRIENDLY";
        }
        elseif($n=="MICE"){
            return "NOT FRIENDLY";
        }
        
    }

}

class Arr extends Animals{

    public static function about($n){
        if($n=="CATS"){
            return "FRIENDLY";
        }
        elseif($n=="DOGS"){
            return "FRIENDLY";
        }
        elseif($n=="MICE"){
            return "NOT FRIENDLY";
        }
        
    }

}

$n = $_GET['n'];

if($n==1){
    //$name="CAT";
    aboutAnimal("CATS");
}
elseif($n==2){
    aboutAnimal("DOGS");
}
elseif($n==3){
    aboutAnimal("MICE");
}
else{
    echo "ERROR! Choose a number from the description list!";
}

//$sound = new Sounds(); $sound->
function aboutAnimal($name){
    $a1= Sounds::about($name);
    $a2= Friends::about($name);
    echo $name." make ".$a1." sound! They are usually ".$a2.".";
}

class BaseClass {
    private function ABC() {
    echo "<br/>In the base class Method : ABC";
    }
    protected function XYZ() {
    echo "<br/>In the base class Method : XYZ";
    }
}
class DerivedClass extends BaseClass {
    // overriding with public for wider accessibility
    public function ABC() {
    echo "<br/> In the derived class Method : ABC";
    }
    // overriding method
    // with more accessibility
    public function XYZ() {
    echo "<br/>In the derived class Method : XYZ";
    }
}
    //$obj1 = new BaseClass;
    //$obj1->ABC();   //throws fatal error
    //$obj1->XYZ();          //throws fatal error
    $obj2 = new DerivedClass;
    $obj2->ABC();
    $obj2->XYZ();
?>