<?php
// Abstract class
abstract class ABC {
    public abstract function xyz();
}

class def extends ABC {
    public function xyz() {
        echo "Welcome to Wappnet";
    }
}

// Create new object
$obj = new def;

echo $obj->xyz();

?>