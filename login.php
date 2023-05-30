<?php
require_once('connection.php');
?> 
<!DOCTYPE html>
<html lang="en" dir="ltr">
<link rel="stylesheet" href="logstyle.css">
    <head>
        <meta charset="utf-8">
        <title>Login Form</title>
        
    </head>
    <body style="background-image: url('vote7.jpg');">
        <form class="box" action="process1.php" method="POST">
            <h1>Login To Vote</h1><br>
            <input type="text" name="Firstname" placeholder="Firstname" required>
            <input type="text" name="Password" placeholder="Password" required><br>
            <input type="submit" name="Login" value="Login" required>
            <input type="button" onclick="location.href='Registration.html';" name="" value="Register" required></a><br>
        </form>
    </body>
</html>