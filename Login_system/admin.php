<html>
<head>
    <title>
    Admin Panel
    </title>
</head>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
    <body>
    <div>
        <div>
        <?php
            if(isset($_GET['message']))
            {
            echo "<h4>Message</h4>".$_GET['message'];
            }
            ?>
        </div>
    <div class="data">
    <table>
        <tr class="heighlight">
        <td>
            ID
        </td>
        <td>
            Edit
        </td>
        <td>
            Name
        </td>
        <td>
            Email
        </td>
        </tr>
    <?php
        include('connection.php');
        $sql="select * from user";
        $select=mysqli_query($con,$sql);
        while($data=mysqli_fetch_assoc($select))
        {
            foreach($data as $key=>$value)
            {
                if ($key=='id')
                    echo "<tr>";
                if($key=='name'){
                    echo "<td><a href='admin_edit.php?name=$value'>Edit</a>  <a href='admin_delete.php?name=$value'>Delete</a></td>";
                    echo "<td>$value</td>";
                }
                else
                {
                    if($key!='password')
                echo "<td class='$key'>$value</td>";
//                if ($key=='id')
//                    echo "</tr>";
                }
            }
        }
        ?>
    </table>
    </div>
    </div>
</body>
</html>