<?php
include('connection.php');
$name=$_GET['name'];
?>

<html>
<head>
    <title>
    </title>
</head>
    <style>
        .message_div{
            border: 2px solid;
            padding-left: 2%;
        }
        .message{
            padding-left: 10%;
            color:coral
        }
    
    </style>
<link rel="stylesheet" href="stylesheet.css" type="text/css"/>

    <body>
        <?php
        if(isset($_GET['message']))
        {
            echo "
        <div class='message_div'>
        <h2> Message</h2>";
        echo "<p class='message'>".$_GET['message']."</p>
        <button><a href='admin.php'> Home</a></button>
        </div>";
        }
                ?>
            
    <div class="data">
    <div>
        <form action="admin_update.php?" method="get">
        <table>
        <tr class="heighlight">
        <td>
            ID
        </td>
        <td>
            NAME
        </td>
        <td>
            Password
        </td>
        <td>
            Email
        </td>
        </tr>

<?php
$sql="select * from user where name='$name'";
$select=mysqli_query($con,$sql);
$data=mysqli_fetch_assoc($select);
foreach($data as $key=>$value)
echo "<td><input type='text' name='$key' value='$value'></td>";
?>
    <tr class='none'>
    <td></td>
    <td></td>
    <td></td>
    <td><input type="submit" value="Update"/> </td>
    </tr>
        </table>
</form>
        
</div>
</div>
</body>
</html>