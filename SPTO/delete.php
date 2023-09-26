<?php
include('connect.php');
$idlg=$_SESSION['id'];
$id=$_GET['id'];
$sql = "DELETE FROM course WHERE c_id=$id";
$query = mysqli_query($conn, $sql);
if($idlg=="member")
{
header('location: index.php?quanly=update');
}
else
{
    header('location: index.php?quanly=updatead');
    }
?>