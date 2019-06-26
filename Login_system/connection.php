<?php
$con=mysqli_connect('localhost','root','','user_registration');
if(!$con)
{
    echo "Cannot Conected";
}
session_start();
$host=$_SERVER['HTTP_HOST'];
$uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\')
?>