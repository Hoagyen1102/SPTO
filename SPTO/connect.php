<?php
$conn = new mysqli("localhost","root","","db");

// Check connection
if ($conn->connect_errno) {
  echo "Thất bại khi kết nối tới database: " . $conn->connect_error;
  exit();
}
?>