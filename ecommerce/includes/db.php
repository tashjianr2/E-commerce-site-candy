<?php 
// After uploading to online server, change this connection accordingly

$con = mysqli_connect("localhost","tashji_tashjianr2","tashjian786","tashji_ecommerce");

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


?>