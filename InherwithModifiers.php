<?php 

// class Father{
//     public static $n1=10,$n2=40;
//     protected static $m1=20, $m2=50;
//     private static $x1=30, $x2=60;
// }
// class Kid extends Father{
//     public function Sum(){
//         //$x3=parent::$x1+parent::$x2;
//         //$x3=parent::$m1+parent::$m2;
//         $x3=parent::$n1+parent::$n2;
//         $m3=parent::$m1+parent::$m2;
//         $a3=parent::$m1+parent::$n1;
//         // $x3=$this->n1+$this->n2;
//         return $x3." ".$m3." ".$a3;
//     }
// }

// $kid = new Kid;
// echo $kid->Sum();

class Father{
    public const n1=30,n2=20;
    protected static  $m1=20, $m2=50;
    // private $x1=30, $x2=60;
}
class Kid extends Father{
    public function Sum(){
        $x3=parent::n1+parent::$m2;
        $m3=parent::$m1+parent::n2;
        // $x3=$this->n1+$this->n2;
        return $x3."".$m3;
    }
}

$kid = new Kid;
echo $kid->Sum();

?>