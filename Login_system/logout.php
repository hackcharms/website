<?php
include('connection.php');
session_destroy();
header("location:http://$host$uri/login.php?error=LogOut Success!");
?>