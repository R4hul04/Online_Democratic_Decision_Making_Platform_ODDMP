<?php 
 require_once('connection.php');
    session_start();
    if(isset($_POST['bjp']))
    {
        $bjp = $_POST['bjp'];
        $query = "SELECT * FROM counts where party='$bjp'";
        $run_query = mysqli_query($con, $query);
    
        
        $count = mysqli_num_rows($run_query);
        if($count >= 0)
        {
            while($row = mysqli_fetch_array($run_query))
            {


		        $bjp_no = $row['votes'];
		        /*echo  */
		        $no = number_format($bjp_no+1);


		        $sql5 = "UPDATE counts SET votes='$no' WHERE party='$bjp'" ;

                if ($con->query($sql5) == TRUE) 
                {
                }
                else
                {
  			            echo "Error updating record: " . $con->error;
                }
            }
        }
        
        header("location:home.html");
    }
    if(isset($_POST['congress']))
    {
        $congress = $_POST['congress'];
        $query = "SELECT * FROM counts where party='$congress'";
        $run_query = mysqli_query($con, $query);
    
        
        $count = mysqli_num_rows($run_query);
        if($count >= 0)
        {
            while($row = mysqli_fetch_array($run_query))
            {


		        $congress_no = $row['votes'];
		        /*echo  */
		        $no = number_format($congress_no+1);


		        $sql5 = "UPDATE counts SET votes='$no' WHERE party='$congress'" ;

                if ($con->query($sql5) == TRUE) 
                {
                }
                else
                {
  			            echo "Error updating record: " . $con->error;
                }
            }
        }
        
        header("location:home.html");
       
    }
    if(isset($_POST['ncp']))
    {
        $ncp = $_POST['ncp'];
        $query = "SELECT * FROM counts where party='$ncp'";
        $run_query = mysqli_query($con, $query);
    
        
        $count = mysqli_num_rows($run_query);
        if($count >= 0)
        {
            while($row = mysqli_fetch_array($run_query))
            {


		        $ncp_no = $row['votes'];
		        /*echo  */
		        $no = number_format($ncp_no+1);


		        $sql5 = "UPDATE counts SET votes='$no' WHERE party='$ncp'" ;

                if ($con->query($sql5) == TRUE) 
                {
                }
                else
                {
  			            echo "Error updating record: " . $con->error;
                }
            }
        }
        
        
        header("location:home.html");
    }
    if(isset($_POST['shivsena']))
    {
        $shivsena = $_POST['shivsena'];
        $query = "SELECT * FROM counts where party='$shivsena'";
        $run_query = mysqli_query($con, $query);
    
        
        $count = mysqli_num_rows($run_query);
        if($count >= 0)
        {
            while($row = mysqli_fetch_array($run_query))
            {


		        $shivsena_no = $row['votes'];
		        /*echo  */
		        $no = number_format($shivsena_no+1);


		        $sql5 = "UPDATE counts SET votes='$no' WHERE party='$shivsena'" ;

                if ($con->query($sql5) == TRUE) 
                {
                }
                else
                {
  			            echo "Error updating record: " . $con->error;
                }
            }
        }
        
        header("location:home.html");
    }
 
?>