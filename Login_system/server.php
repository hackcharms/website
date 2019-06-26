<?php
$email=$_POST['email'];
$password=md5($_POST['password']);
$password="($password)";
session_start();
$con=mysqli_connect('localhost','root','','user_registration');
if(!$con)
{
    echo "Cannot Conected";
}

$extra='login.php';
$host=$_SERVER['HTTP_HOST'];
$uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');

$data="SELECT * FROM user WHERE `email`='$email'";
$check=mysqli_query($con,$data);
    if(!$check)
    {
        echo "<br>Cannot Selected";
    }
else
{
 echo "<pre>";
$password_query="SELECT * FROM user WHERE `password`='$password' && `email`='$email'";
$check=mysqli_query($con,$password_query);
$num=mysqli_num_rows($check);
if($num==1)
{   
$data=mysqli_fetch_assoc($check);
{
    $_SESSION['email']=$email; 
    $_SESSION['password']=$password;
    header("location:http://$host$uri/index.php");
}


}
    else
    {
         header("location:http://$host$uri/login.php?error=Password Or Email is Incorrect!!");
    }
}






































if($password==20)
{
    while($data=mysqli_fetch_assoc($check))
       if(isset($_POST['username']))
       {
        if($username==$data['username'])
        {
            
           if($password==$data['password'])
            {
               $_SESSION['username']=$username;
                $_SESSION['password']=$password;
               print_r($data);
            }
            else
            {
                
               $_SESSION['password_error']='Incorrect Password!!'.$data['password'].'!='.$password;
                header("location:http://$host$uri/$extra");
                exit();
           }
       }
           else
           {
               $_SESSION['username_error']='Username Not Found!!'.$data['username'].'!='.$username;
               header("location:http://$host$uri/$extra");
           }
       }
}
 echo "<pre>";
?>