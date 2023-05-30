<?php
require_once('connection.php');
session_start();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Admin Dashboard</title>
        <link rel="stylesheet" href="adminstyle.css">
    </head>
    <body style="background-color:#191919;">

        <form class="box" style="background-color:#34495e;">
            <h1>Admin Dashboard</h1><br>

        <?php

            $query = "SELECT * FROM counts ";
            $run_query = mysqli_query($con, $query);
    
        
            $count = mysqli_num_rows($run_query);
            if($count > 0)
            {
                while($row = mysqli_fetch_array($run_query))
                {
                    echo ' PARTY IS :-' ." ". $row['party'];
                    echo ' VOTES ARE :-' ." ". $row['votes'].'<br/><br/><br/><br/>';


                }
            }

        ?>


    </form>
    </body> 
</html>