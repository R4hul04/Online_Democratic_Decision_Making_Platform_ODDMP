<?php
require_once('connection.php');
?> 
<!DOCTYPE html>
<html lang="en" dir="ltr">
<meta charset="utf-8">
<link rel="stylesheet" href="adminlogstyle1.css">
    <head>
       
        <title>Adimn Login </title>
        
    </head>
    <body style="background-image: url('abs1.jpg');">

        <form class="box" action="admin_check.php" method="POST">
            <h1>Admin Login</h1><br>
            <input type="text" name="Username" placeholder="Username" required>
            <input type="text" name="Password" placeholder="Password" required><br>
            <input type="submit" name="Login" value="Login" >
        </form>
    </body>
</html>