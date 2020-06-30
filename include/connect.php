<?php
$link = new mysqli("localhost","root","","dienthoai");

// Check connection
if ($link -> connect_errno) {
  echo "Failed to connect to MySQL: " . $link -> connect_error;
  exit();
}
?>
