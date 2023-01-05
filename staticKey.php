<?php

class A{
    static $s='Wappnet';
    public static function show(){
        echo 'Hema!';
    }
}

class B extends A{
    public static function show(){
        echo 'Hello, ';
    }
}

class greeting {
    public static function welcome() {
      echo " Hello World!";
    }
  }
  
  class SomeOtherClass {
    public function __construct() {
      greeting::welcome();
    }
  }

  class domain {
    protected static function getWebsiteName() {
      return "<br>Wappnet.com";
    }
  }
  
  class domainW3 extends domain {
    public $websiteName;
    // public function __construct() {
    //   echo $this->websiteName = parent::getWebsiteName();
    // }

    function __destruct() {
        echo $this->websiteName = parent::getWebsiteName();
      }
  }

echo A::$s.": ";
B::show();
$classname='A';
$classname::show();

new SomeOtherClass;

new domainW3;
?>
