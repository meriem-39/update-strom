<?php
$con = mysqli_connect('localhost','root','' ,'shopping');
// Check connection
if ($con -> connect_errno) {
    echo "Failed to connect to MySQL: " . $con -> connect_error;
    exit();
  }
  else{
   // echo "Well to connect shopping data base: ";
    
  }
?>
