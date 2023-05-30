<?php
    require_once('connection.php');
    session_start();
        if(isset($_POST['Login']))
            {
                $query="select * from ad_table where username='".$_POST['Username']."' and password='".$_POST['Password']."'";
                $result=mysqli_query($con,$query);
                if(mysqli_fetch_assoc($result))
                {
                    $_SESSION['Password']=$_POST['Password'];

                    header("location:Admin_dash.php");
                }
                else {
                    echo 'INVALID USERNAME PASSWORD' ;
                }
                
            }
    ?>