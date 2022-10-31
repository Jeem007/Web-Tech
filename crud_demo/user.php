<?php
include 'connection.php';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];
    
    $sql = "insert into `crud` (name,email,mobile,password)values('$name','$email','$mobile','$password')";
    $result = mysqli_query($con,$sql);
    
    if($result){
        //echo "Data inserted Successfully";
        header('location:display.php');

    }else{
        die(mysqli_error($con));
    }



}

?>











<!DOCTYPE html>
<html>

<body>

    <div class="div container">
        <form method='post'>
            <fieldset style="background: #3ba56b; border: 2px solid #a4a2bb;">
                <label>Name:</label>
                <input type="text" name="name" placeholder="Enter First Name:">
                <br><br>
                <label>Email:</label>
                <input type="email" name="email" placeholder="Enter your Email:">
                <br><br>
                <label>Mobile No:</label>
                <input type="text" name="mobile" placeholder="Enter your Mobile No:">
                <br><br>
                <label>Password:</label>
                <input type="password" name="password" placeholder="Enter your password:">
                <br><br>

                <button type="submit" name="submit">Submit</button>
                <!--<a href="Forgot pasword?">Forgot Password?</a><br> -->

            </fieldset>
        </form>
    </div>


</body>

</html>