<html>
    
<header>
<title>
<?php
    include('connection.php');
    
    echo " Profile /".$_SESSION['name'] ;?>     
</title>    
</header>
    <style>
        .icon{
            width: 30%;
        }
    
    </style>
<body>
    <div>
    <table>
        <tr><td>
        <h2>
            Profile</h2></td>
            <td>
        <a href="update.php">
                
                <img class='icon' src="edit.png"/>Edit
                </a>
        </td></tr>
        <?php
        $name=$_SESSION['name'];
        
            $sql="select * from user where name = '$name'";
        $select=mysqli_query($con,$sql);
        if(!$select)
            echo "Canot selected";
        else
        {
            while($data=mysqli_fetch_assoc($select))
            {
                foreach ( $data as $key=>$value)
                {
                
                if($key!='password' and $key!='id'){
                echo "<tr>";
                echo ("<td>".strtoupper($key)."</td><td> ".strtoupper( $value)."</td>");
                    echo "</tr>";
                }
                }
//                echo "<td>".$data['name']."</td><td>".$data['name']."</td><td>".$data['name']."</td><td>".;
            }
        }
        echo "</tr>";
            ?>
        
    </table>
    </div>
    
</body>
</html>