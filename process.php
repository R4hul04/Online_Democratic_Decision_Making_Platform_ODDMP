<?php
    require_once('connection.php');
    session_start();
    if(isset($_POST['Login']))
    {
        $query="select * from voters_info where f_name='".$_POST['Firstname']."' and password='".$_POST['Password']."'";
        $result=mysqli_query($con,$query);
        if(mysqli_fetch_assoc($result))
            {
                $_SESSION['Password']=$_POST['Password'];
                
                header("location: votingpage.php");
            }
            else
            {
                echo "Enter Valid Username And Password" ;
            }
    }
?>