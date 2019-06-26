<!DOCTYPE html>
<html>
<head>
    <title>
        
    </title>
<style>

    *{
        margin: 0px;
        padding: 0px;
    }  
    body{
        background: #acc5f1;
    }
    td{
        height: 40px;
        width: 200px;
        font-size: 30px;
        text-align: center;
    }
    ._td{
        height: auto;
        width: auto;
        font-size: auto;
        text-align: auto;
    }
    input{
        height: 30px;
    }
    .login_body{
        
        margin-left: 20%;
        margin-top: 10%;
        background: cornflowerblue;
        width: 50%;
        
    }
    .warn{
        color: red;
        font-size: 130%;
        text-align: center;
    }
    
    .link a{
        text-decoration: none;
        font-size: 50%;
    }
    
    
    
    
    
</style>
    
</head>

<body>
    <div>
        <div class="login_body">
           <h1 align="center">Login</h1> 
            <form action="server.php" method="post">
                <table>
                    <tr>
                        <td>
                        Email:
                        </td>
                        <td>
                        <input type="text" name='email' placeholder="Email" required/>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        Password
                        </td>
                        <td>
                        <input type="Password" name='password' placeholder="Password" required/>
                        </td>
                    </tr>
                    <tr>
                        <td class='_td'>
                        </td>
                        <td class='_td warn'>
                           <?php
                            session_start();
                            
                            if(isset($_GET['error']))
                            {
                                echo $_GET['error'];
                            }
                            
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="link">
                            <a href="Registration.html">Creat New Account</a>
                        </td>
                        <td>
                        <input type="submit" value=" Login ">
                        </td>
                    </tr>
                
                </table>
                
            </form>
        </div>
    </div>
</body>
</html>