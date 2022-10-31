<?php
include 'connection.php';
$id = $_GET['update_id'];

  //---------------------------------------data show when update in form
  $sql = "Select * from `crud` where id=$id";
  $result = mysqli_query($con,$sql);
  $row = mysqli_fetch_assoc($result);
  $name = $row['name'];
  $email = $row['email'];
  $mobile = $row['mobile'];
  $password = $row['password'];
//----------------------------------------------------------------
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];
    
    $sql = "update `crud` set id=$id, name = '$name', email= '$email', mobile = '$mobile' ,password = '$password' where id=$id";
    $result = mysqli_query($con,$sql);

    if($result){
        //echo "Data Updated Successfully";
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
                <input type="text" name="name" placeholder="Enter First Name" value ="<?php echo $name;?>" >
                <br><br>
                <label>Email:</label>
                <input type="email" name="email" placeholder="Enter your Email" value ="<?php echo $email;?>">
                <br><br>
                <label>Mobile No:</label>
                <input type="text" name="mobile" placeholder="Enter your Mobile No" value ="<?php echo $mobile;?>">
                <br><br>
                <label>Password:</label>
                <input type="password" name="password" placeholder="Enter your password:" value = "<?php echo $password;?>">
                <br><br>

                <button type="submit" name="submit">Update</button>
                <!--<a href="Forgot pasword?">Forgot Password?</a><br> -->

            </fieldset>
        </form>
    </div>


</body>

</html>