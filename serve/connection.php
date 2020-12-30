<?php

$db_host="localhost";
$db_name="nature_beauty";
$db_user="root";
$db_pass="";
$conn = new mysqli($db_host,$db_user,$db_pass,$db_name);
if ($conn -> connect_errno) {
  echo "Failed to connect to MySQL: " . $conn -> connect_error;
  exit();
}
?>