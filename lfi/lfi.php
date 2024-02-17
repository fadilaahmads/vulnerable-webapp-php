<?php
// Get the page parameter from the URL
$page = $_GET['page'];

if (isset($page)){
  include("/page/$page");
} else {
  echo "<h3> 404 Not Found";
}

?>

