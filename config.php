<?php
$conn = mysqli_connect("localhost","root","","exam_suite");
if(!$conn){
 echo"conncetion failed".mysqli_connect_error()
   or
  die();
 }

?>