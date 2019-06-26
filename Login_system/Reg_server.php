<?php
include('connection.php');
$email=$_POST['email'];
$name=$_POST['name'];
$_SESSION['name']=$name;
$password=md5($_POST['password']);
$sql="select `email` from `user` where `email` ='$email'";
$check=mysqli_query($con,$sql);
if($check)
{
    echo 'slected';
    $num_data=mysqli_num_rows($check);

if($num_data==0)
{
// add Data in Database 
    $add="insert into user(name,password,email)
    values('$name','($password)','$email')
    ";
    $conform=mysqli_query($con,$add);
    if(!$conform)
        echo "Data Canot Added";
    else{
        $_SESSION['email']=$email;
        $_SESSION['password']=$password;
        header("location:http://$host$uri/index.php?");
    }
}
else
{
    // Data already Exist
    header("location:http://$host$uri/login.php?error=email Already Exist");
}

}
else
    echo "Connection Faillled";

?>