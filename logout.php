<?php 
    session_start(); 
 
    if (isset($_SESSION['username'])){
        unset($_SESSION['username']); // xóa session login
        unset($_SESSION['id']);
    }
    header("location: /index.php");
?>
