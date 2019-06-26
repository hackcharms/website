<?php
// Update
include('connection.php');
$email=$_SESSION['email'];
$name=$_POST['name'];
$new_email=$_POST['email'];

$sql="UPDATE `user` SET `name` = '$name', `email` = '$new_email' WHERE `user`.`email` = '$email'";


$check=mysqli_query($con,$sql);
if($check)
{
    $_SESSION['email']=$new_email;
    header("location:http://$host$uri/update.php?get= Data Updated");
}
else
{
    echo "Cannot Updated";
}

?>