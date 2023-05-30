<?php
require_once('connection.php');
session_start();
if(isset($_POST['Register'])) 
{
    $fname = $_POST['Firstname'];
    $lname = $_POST['Lastname'];
    $dob = $_POST['DOB'];
    $gender = $_POST['gender'];
    $address = $_POST['Address'];
    $mobile = $_POST['phone'];
    $email = $_POST['email'];
    $password = $_POST['pwd'];
    $sql = "INSERT INTO vote_info (f_name , l_name, dob, gender, address, mobile, email, password ) VALUES ('$fname', '$lname', '$dob', '$gender', '$address', '$mobile', '$email', '$password')";
    if ($con->query($sql) == TRUE) {
        echo "New record created successfully";
      } else {
        echo "Error:";
      }   
    header("location:login.php");
}
?>