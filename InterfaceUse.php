<?php

interface a {
    //var $n;
	public function abc();
}

interface b {
	public function xyz();
}

class c implements a, b {

	public function abc() {
		echo 'ABC<br>';
	}
	
	public function xyz() {
		echo 'XYZ';
	}

}

// Create an object
$obj = new c;

$obj->abc();
$obj->xyz();

?>
