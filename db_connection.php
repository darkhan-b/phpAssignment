<?php
  $db_host = "localhost";
  $db_user = "darkhan_assignment";
  $db_password = "assignmentDark";
  $db_name = "client";
  $connection = mysqli_connect($db_host, $db_user, $db_password, $db_name);
  if(mysqli_connect_error())
  {
    echo mysqli_connect_error();
    exit;
  }
?>
