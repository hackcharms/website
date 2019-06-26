<?php
include('connection.php');
$email=$_SESSION['email'];

if (isset($_SESSION['email']))
{
    $sql="select * from user where email='$email'";
    $check=mysqli_query($con,$sql);
    if(!$check)
    {
        echo "Session is not found in database";
    }
        else
    {
            echo"<pre>";
        $data=mysqli_fetch_assoc($check);
        $_SESSION['name']=$data['name'];
    }
    echo"<pre>";
}
else
{
    header("location:http://$host$uri/login.php?error=Login First");
}
?>
<html>
<body>
<h2>
    
    hello <?php echo $_SESSION['name']."<br>";?>
    <a href='logout.php'>Logout</a>
    <a href="profile.php"><img src="user-male.png"> Profile</a>
    </h2>    
    
    </body>

</html>