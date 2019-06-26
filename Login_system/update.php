<?php
include('connection.php');
$email=$_SESSION['email'];
$sql="select * from user where email='$email'";
$check=mysqli_query($con,$sql);
if(!$check)
{
    echo "CAnnno connected to $email";
}
$data=mysqli_fetch_assoc($check);

?>


<html>
<style>
    
    .warn{
       color: red;
        
    }    
</style>
<body>
    
<form action="update_ser.php" method="post">
                <table>
                    <tr>
                        <td>
                        Name:
                        </td>
                        <td>
                        <input type='text' name='name' value="<?php echo($data['name']);?>" required>
                        </td>
                    </tr>
                    <tr>
                        <td  class="_td">
                        Mail_ID:
                        </td>
                        <td class='lowercase'>
                        <input type="mail" name='email' value=<?php echo $data['email']?> required/>
                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td class="warn">
                            <?php
                                if(isset($_GET['get']))
                                {
                                    echo $_GET['get'];
                                }
                            ?>
                        </td>
                        <td>
                        <input type="submit" value=" Update ">
                        </td>
                    </tr>
                
                </table>
                
            </form>    
    
    
</body>

</html>