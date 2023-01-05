<!-- 
the visibility of the method must be the same or less restrictive
than that of it its definition on a parent class
-->
<?php
class Fruit {
  public $name;
  public $color;
  public $weight;

  function set_name($n) {  // a public function (default)
    $this->name = $n;
  }
  protected function set_color($n) { // a protected function
    $this->color = $n;
  }
  private function set_weight($n) { // a private function
    $this->weight = $n;
  }
}

class B extends Fruit {
    
    public function set_color($n){
        $this->color = $n;   
        // echo $this->color;
        $this->weight = 300;
    }
    
}

$mango = new B();
$mango->set_name('Mango'); 
$mango->set_color('Yellow'); 
echo $mango->name." is ".$mango->color." color. It's weight is: ".$mango->weight;
//$mango->set_weight('300'); 
?> 