<?php

// class Master{
//    function show(){
//      echo "This is show method in Master class<br>";
//    }
   
// }

// class Student extends Master{
//     function show(){
//      echo "This is show method in Student class<br>";
//     }
// }

// $obj = new Master;
// $obj->show();

// $obj = new Student;
// $obj->show();
class Bank{
  function getRateOfInterest(){
    return 0;
  }
}
  
class SBI extends Bank{
  function getRateOfInterest(){
    return 5;
  }
}
  
class ICICI extends Bank{
  function getRateOfInterest(){
    return 6;
  }
}
  
class AXIS extends Bank{
  function getRateOfInterest(){
    return 7;
  }
}
    $s=new SBI();
    $i = new ICICI();
    $a = new AXIS();
    echo("Rate of Interest in SBI is ".$s->getRateOfInterest()."%");
    echo("Rate of Interest in ICICI is ".$i->getRateOfInterest()."%");
    echo("Rate of Interest in AXIS is ".$a->getRateOfInterest()."%");

?>