<!-- php codes -->
<?php

$fullname = $email = $username = $password = $retypepassword = "";
$fullnameErr = $emailErr = $usernameErr = $passwordErr = $retypepassErr = "";



if($_SERVER["REQUEST_METHOD"] == "POST"){
    //Full name
    if(empty($_POST["fullname"])){
        $fullnameErr = "Type you full name";
 
    }
    else{
        $fullname = test_input($_POST["fullname"]);
        }
    

    //User Name
    if(empty($_POST["username"])){
        $usernameErr = "Name is required";

    }
    else{
        $username = test_input($_POST["username"]);
        if(!preg_match("/^[a-zA-Z0-9]*$/", $username)){
            $usernameErr = "Only letters and Number allowed";
        }
    }


    //Email
    if (empty($_POST["email"])) {
        $emailErr = "Email is mandatory";
      } else {
        $email = test_input($_POST["email"]);
        // check if e-mail address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          $emailErr = "Invalid email format";
        }
      }
}



function test_input($data){
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
    <form method ="POST" action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
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





    </div>
</body>
</html>