<?php
  $connect = mysqli_connect("localhost", "root", "", "csas");
  if(!$connect){
      echo "Error in connection".mysqli_error($connect);
  }
?>