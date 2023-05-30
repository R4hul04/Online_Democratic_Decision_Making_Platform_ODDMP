<!DOCTYPE html>
<?php
require_once('connection.php');
 
?>
<html>
    <head>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">  
    </script>
        <style>
            .container .box { 
                width:1200px;
                height:700px; 
                margin:50px; 
                display:table; 
            } 
            .container .box .box-row { 
                display:table-row; 
            } 
            .container .box .box-cell { 
                display:table-cell; 
                width:30%; 
                padding:10px; 
            } 
            .container .box .box-cell.box1 { 
                border: 3px outset black;
                background:#34495E; 
                color:white; 
                text-align:justify; 
             } 
            .container .box .box-cell.box2 { 
                border: 1px outset black;
                background:#050c27; 
                text-align:relative ;
                width : 1000px ;
                height : 450px ;
                left: 550px;
                top: 160px;
            } 
            .pallete1{
                position : relative ;
                border: 1px outset white;
                background-color: #5F788B ;
                /*text-align: center; */
                width : 550px ;
                height : 450px ;
                left: 750px;
                top: 110px;
                
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
                left: 70px;
                top: 60px;
            }
            #btn2{
                border: 3px outset black;
                position : relative ;
                width : 150px ;
                height : 150px ;
                left: 100px;
                top: 60px;
            }
            #btn3{
                border: 3px outset black;
                position : relative ;
                width : 150px ;
                height : 150px ;
                left: -30px;
                top: 250px;
            }
            #btn4{
                border: 3px outset black;
                position : relative ;
                width : 150px ;
                height : 150px ;
                left: 70px;
                top: 100px;
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

        </style>
    </head>
    <body bgcolor="273943">
    <div class="container" >
            <div class="box"> 
                <div class="box-row"> 
                    <div class = "box-cell box1">
                        <h1 class = 'p2position'>USER DETAILS  </h1>
                           
                    </div>
                </div>
                    <div class = "box-cell box2">
                    <h1 class = 'p1position'> VOTE HERE </h1>
                    <form class ="pallete1"  action="login.php" method="POST">
                            <input type="submit" id ="btn1" name="BJP"      value="BJP"      class="btn btn-primary"><img src="bjp.jpg" height ="100px" width="100px"></input>
                            <input type="submit" id ="btn2" name="CONGRESS" value="CONGRESS" class="btn btn-primary"><img src="congress.png" height ="90px" width="90px"></input>
                            <input type="submit" id ="btn3" name="NCP"      value="NCP"      class="btn btn-primary"><img src="ncp.jpg" height ="90px" width="90px"></input>
                            <input type="submit" id ="btn4" name="SHIVSENA" value="SHIVSENA" class="btn btn-primary"><img src="shiv_sena.jpg" height ="90px" width="90px"></input>
                        </form> 
                    </div>
                </div>
            </div>
    </div>


    </body>
</html>