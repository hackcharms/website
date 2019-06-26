<?php
include('connection.php');
$name=$_GET['name'];
$sql="delete from user where name='$name'";
$delete=mysqli_query($con,$sql);
header("location:http://$host$uri/admin.php?message=$name Data Deleted Successfully")
?>