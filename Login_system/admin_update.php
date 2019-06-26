<?php
include('connection.php');
$old_name=$_SESSION['old_name'];
$id=$_GET['id'];
$name=$_GET['name'];
$email=$_GET['email'];
$sql="update user set id='$id',name='$name',email='$email' where name='$name'";
$update=mysqli_query($con,$sql);
if(!$update)
    echo " Data Can not updated;".$con->error;


header("location:http://$host$uri/admin_edit.php?name=$name &message=Edited Success")
?>