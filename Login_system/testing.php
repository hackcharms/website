<?php
include('connection.php');
$email=$_SESSION['email'];
$sql="select * from user where email='$email'";
$check=mysqli_query($con,$sql);
if(!$check)
{
    echo "CAnnno connected to $email";
}
echo "<pre>";
$data=mysqli_fetch_assoc($check);
$name= ($data['name']);
?>
<input type='text' value='<?php echo $name;?>'/>