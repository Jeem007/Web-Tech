<?php
$name = $username = "";
$nameErr = $usernameErr = "";


if($_SERVER["REQUEST_METHOD"]=="POST"){
    //name
    if(empty($_POST["name"])){
        $nameErr ="Type your name";
    }
    else{
        $name = test_input($_POST['name']);
    }

    //Username
    if (empty($_POST["username"])) {
        $usernameErr = "Type your User Name";
      } else {
        $username = test_input($_POST["username"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z0-9]*$/",$username)) {
          $usernameErr = "Only letters and Number allowed";
        }
      }



}


function test_input($data){
    $data = trim($data);
    $data =stripcslashes($data);
    $data = htmlspecialchars($data);
    return $data;

}
?>

<html>
<head>
<body>
<div class= "container" align =  "center">
<form method="POST"  action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
Name: <input type ="text" name = "name" value ="<?php echo $name ?>"> 
<span><?php echo $nameErr ;?></span> </input>
<br><br>
User Name: <input type ="text" name = "username"  value ="<?php echo $username ?>"> 
<span><?php echo $usernameErr ;?></span> </input>
<br><br>
<button type = "submit" name = "submit" value= "submit">Submit</button>
</div>


</body>
</head>
</html>
