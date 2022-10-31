<?php
$fname =  $_POST['FirstName'];
$lname =  $_POST['Lastname'];
$email =  $_POST['Email'];
$gender = $_POST['gender'];
echo "Welcome $fname $lname </br>";
echo "Your email id is: $email </br>";
echo "Gender is: $gender";

?>
<!-- for show in same page use this condition 
if($_SERVER['REQUEST_METHOD']=='POST') -->