<!DOCTYPE html>
<?php
        require_once('connection.php');
        
?>
<html>
    <head>

        <style>
            .container .box { 
                width:1210PX;
                height:740px; 
                margin:50px; 
                display:table; 
            } 
            .container .box .box-row { 
                display:table-row; 
            } 
            .container .box .box-cell { 
                display:table-cell; 
                width:15%; 
                padding:10px; 
            } 
            .container .box .box-cell.box1 { 
                border: 3px outset black;
                background:#34495E; 
                color:white; 
                text-align:justify;
                width : 20px ; 
             } 
            .container .box .box-cell.box2 { 
                border: 1px outset black;
                background:#050c27; 
                text-align:relative ;
                width : 90px ;
                height : 450px ;
                left: 500px;
                top: 160px;
            } 
            .pallete1{
                position : relative ;
                border: 1px outset black;
                background-color: #5F788B ;
                /*text-align: center; */
                width : 550px ;
                height : 450px ;
                left: -150px;
                top: 50px;
                
            }
            
            /*.pallet2{
                position : relative ;
                border: 5px outset red;
                background-color: lightblue;
                text-align: center;
                width : 100px ;
                height : 350px ;
                left: 100px;
                top: 16px;
            }*/

            #btn1{
                border: 3px outset black;
                position : relative ;
                width : 150px ;
                height : 150px ;
                left: 90px;
                top: 40px;
            }
            #btn2{
                border: 3px outset black;
                position : relative ;
                width : 150px ;
                height : 150px ;
                left: 135px;
                top: 35px;
            }
            #btn3{
                border: 3px outset black;
                position : relative ;
                width : 150px ;
                height : 150px ;
                left: -20px;
                top: 225px;
            }
            #btn4{
                border: 3px outset black;
                position : relative ;
                width : 150px ;
                height : 150px ;
                left: 90px;
                top: 75px;
            }
            .p1position{
                position: relative;
                left: 380px;
                top: 20px;
            }
            .p2position{
                position: relative;
                left: 20px;
                top: 20px;
            }
            .btn btn-primary1:hover {
                background-color: red;
                color: white;
}

        </style>
    </head>
    <body bgcolor="273943" style="background-image: url('gr.jpg');"> 
    <div class="container"> 
            <div class="box"> 
                <div class="box-row"> 
                    <div class = "box-cell box1" style="background-image: url('blur.jpg');">
                        <h1 class = 'p2position'> USER DETAILS </font></P></h1>
                        <?php
                            session_start();
                            if(isset($_POST['Login']))
                            {
                                $query="select * from vote_info where f_name='".$_POST['Firstname']."' and password='".$_POST['Password']."'";
                                $result=mysqli_query($con,$query);
                                if(mysqli_fetch_assoc($result))
                                    {
                                        $_SESSION['Password']=$_POST['Password'];
                                        
                                        $sql1 = "SELECT * from vote_info where password='".$_POST['Password']."'" ;
                                        $result = $con->query($sql1);
                                        if ($result->num_rows > 0)
                                        { 
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) 
                                            {
                                                echo '<br/><br/><br/>';
                                                echo ' FirstName ' . $row['f_name'].'<br/><br/>';
                                                echo ' Lastname ' . $row['l_name'].'<br/><br/>';
                                                echo ' Date of Birth ' . $row['dob'].'<br/><br/>';
                                                echo ' Gender ' . $row['gender'].'<br/><br/>';
                                                echo ' Address ' . $row['address'].'<br/><br/>';
                                                echo ' mobile ' . $row['mobile'].'<br/><br/>';
                                                echo ' email ' . $row['email'].'<br/><br/>';
                                                $status   =  $row['status'];
                                                if($status == 'YES')
                                                {
                                                    header("location:login.php");
                                                }
                                                //echo ' status ' . $row['name'].'<br/>';
                                                
                                                $status =$_POST['Password'];
                                                $sql4 = "UPDATE vote_info SET status='YES' WHERE password= '$status'";
                                                if ($con->query($sql4) === TRUE) {
  			
                                                } else {
                                                      echo "Error updating record: " . $con->error;
                                                        }
                                            }
                                        }
                                    }
                                    else
                                    {
                                        header("location:login.php"); ;
                                    }   
                                }
                                    
                        ?>
                    </div>
                    <div class = "box-cell box2" style="background-image: url('abs.jpg');">
                    <h1 class = 'p1position'><font color = "black"> VOTE HERE </font></P>
                    
                    <form style="background-image: url('gr1.jpg');" class ="pallete1" action ="logout.php" method="post">
                            <button type="submit" id ="btn1" class="btn btn-primary1" onclick="alert('Voted Successfully')" name="bjp" value="bjp"><img src="bjp.jpg" height ="100px" width="100px"></button>
                            <button type="submit" id ="btn2" class="btn btn-primary1" onclick="alert('Voted Successfully')" name="congress" value="congress"><img src="congress.png" height ="90px" width="90px"></button>
                            <button type="submit" id ="btn3" class="btn btn-primary1" onclick="alert('Voted Successfully')" name="ncp" value="ncp"><img src="ncp.jpg" height ="90px" width="90px"></button>
                            <button type="submit" id ="btn4" class="btn btn-primary1" onclick="alert('Voted Successfully')" name="shivsena" value="shivsena"><img src="shiv_sena.jpg" height ="90px" width="90px"></button>
                            
                        </form>

                    </div>
                </div>
            </div>
    </div>  
</body>

 
