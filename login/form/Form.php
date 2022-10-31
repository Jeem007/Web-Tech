<!-- php codes -->
<?php
$success= 0;
$user = 0;


$fullname = $email = $username = $password = $retypepassword = "";
$fullnameErr = $emailErr = $usernameErr = $passwordErr = $retypepassErr = "";






        if($_SERVER["REQUEST_METHOD"] == "POST"){

            include 'connect.php';
            $fullname = $_POST['username'];
            $email = $_POST['email'];
            $username = $_POST['username'];
            $password = $_POST['password'];
        
        
            $sql = "select *from `registration`  where username = '$username' or email= '$email'";
            $result = mysqli_query($con,$sql);
        
            if(mysqli_num_rows($result)>0){
                $row = mysqli_fetch_assoc($result);
                if($email == isset($row['email'])){
                    $user=1;
                }
                if($username ==isset($row['username'])){ 
                    $user=1;
                }
        
         
            else{

              $sql="insert into `registration` (fullname,username,email,password) values('$fullname','$username','$email','$password')";
              $result = mysqli_query($con,$sql);
              if($result){
                //echo "Signup Successful";
                $success= 1;
              }
              else{
                die(mysqli_error($con));
              }
        }
    }

     
    }
    






function test_input($data)
{
    $data = trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);
    return $data;

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, th, td {
        border: 1px solid white;
        border-collapse: collapse;
        text-align: center;
        font-size: 18px;
        }
        th,td {
     background-color: #3ba56b;
        }
    </style>
</head>
<body>
    <div class="conatiner" align ="center">
    <form method ="POST" action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <h2>Sign UP</h2>
    <table>
         <tr>
            <td><label>Full Name: </label> </td>
            <td>
             <input type="text" name= "fullname" placeholder="Enter your Full Name" 
            value ="<?php echo $fullname; ?>" > <?php echo $fullnameErr; ?>
            </input>
            </td>
        </tr>      

        <tr>
            <td><label>Email: </label> </td>
            <td>
             <input type="text" name= "email" placeholder="Enter your email" 
             value ="<?php echo $email; ?>" > <?php echo $emailErr; ?>
            </input>
            </td>
        </tr>

        <tr>
            <td><label>User Name: </label> </td>
            <td>
             <input type="text" name= "username" placeholder="Enter your username" 
             value ="<?php echo $username; ?>" > <?php echo $usernameErr; ?>
            </input>
            </td>
        </tr>

        <tr>
            <td><label>Password: </label> </td>
            <td>
             <input type="password" name= "password" placeholder="Enter your password" 
             value ="<?php echo $password; ?>" > <?php echo $passwordErr; ?>
            </input>
            </td>
        </tr>

        <tr>
            <td><label>Confirm Password: </label> </td>
            <td>
             <input type="password" name= "retypepassword" placeholder="Retype your password" 
             value ="<?php echo $retypepassword; ?>" >  <?php echo $retypepassErr; ?>
            </input>
            </td>
        </tr>
        <br>
        <tr>
            <td colspan="2">
            <button type="submit" value="Submit">Regiter</button>
            <button type="reset" value="Reset">Reset</button>
            
            </td>
            
        </tr>

        <p>Already a member ? <a href = "Login.ophp">Sign In</a></p>





    </div>
</body>
</html>