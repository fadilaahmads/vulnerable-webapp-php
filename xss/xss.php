<?php
  include('headers.php');

  function Process(){
    if ($_SERVER["REQUEST_METHOD"] === "GET") {
      $name = $_GET["name"];
      echo "<h2>Hello, $name!</h2>";
    }
  }
 ?>
