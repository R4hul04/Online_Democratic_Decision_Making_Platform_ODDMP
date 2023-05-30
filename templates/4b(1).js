<html>
<head>
<meta charset="utf-8">
<title>Creating Simple jQuery Validation in Registration Form</title>
<link href="style/style.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"> </script>
<script type="text/javascript" src="js/script.js"></script>
<meta name="robots" content="noindex,nofollow"/>
</head>

<body>
	<div id="wrap"> <!--wrap start-->
    	<div id="wrap2">  <!--wrap2 start-->
       
       	<h2 class="free_account">Create an free account</h2> 
        
    	<form action="process.php" method="post" id="register_form">
        	
                <p class="validate_msg">Please fix the errors below!</p>
                
                <p> <label for="name">First Name</label> <input name="fname" type="text" /> <span class="val_fname"></span> </p> 
                <p> <label for="lname">Last Name</label>  <input name="lname" type="text" />  <span class="val_lname"></span> </p>
                <p> <label for="email">Your Email</label> <input name="email" type="text" /> <span class="val_email"></span> </p>
                <p> <label for="password">Password</label>  <input name="password" type="password" /> <span class="val_pass"></span> </p>
                <p> <label for="repassword">Retype Password</label>  <input name="repassword" type="password" /> <span class="val_pass2"></span> </p>
                <p> <label for="phone">Phone No.</label> <input name="phone" type="text" /> <span class="val_phone"></span> </p>
                
				<p> <label for="birth">Birth Date</label>  
                            	<select name="month">
                    				<option value="">Month</option>
                                    <?php 
										$months = array('1' => 'Jan', '2' => 'Feb', '3' => 'Mar', '4' => 'Apr', '5' => 'May', '6' => 'June', '7' => 'July ', '8' => 'Aug', '9' => 'Sept', '10' => 'Oct', '11' => 'Nov', '12' => 'Dec');
										foreach($months as $m => $month) {
									?>
                                    <option value="<?php echo $m; ?>"><?php echo $month; ?></option>
                                    <?php } ?>
                                </select>
                                <select name="day">
                    				<option value="">Day</option>
                                    <?php for($day = 1; $day < 32; $day++) { ?>
                                    <option value="<?php echo $day; ?>"><?php echo $day; ?></option>
                                    <?php } ?>
                                </select>
                                <select name="year">
                    				<option value="">Year</option>
                                    <?php 
										$year = date("Y");
										for($j = $year; $j > 1949; $j--) { 
									?>
                                    <option value="<?php echo $j; ?>"><?php echo $j; ?></option>
                                    <?php } ?>
                                </select>
                <span class="val_bday"></span> </p>
                
				<p> <label for="gender">Gender</label>  <input name="gender" type="radio" value="m" /> Male <input name="gender" type="radio" value="f" /> Female <span class="val_gen"></span> </p>
				
				<input type="submit" name="submit" value="Register">
        </form>
       
        </div>  <!--wrap2 end-->
    </div>  <!--wrap start-->
</body>
</html>