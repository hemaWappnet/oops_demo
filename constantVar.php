<!-- define(name, value, case-insensitive no longer supported) -->

<?php

define("GREETING", "Welcome to W3Schools.com!");
echo GREETING;

define("cars", [
    "Mini Cooper",
    "BMW",
    "Toyota"
  ]);
  echo cars[0];

  function myTest() {
    echo GREETING;
  }

  myTest();
?>
