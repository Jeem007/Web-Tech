<?php
include 'connection.php';
$link_address1 ='update.php';
$link_address2 ='delete.php'
?>

<!DOCTYPE html>
<html>
    <head>
    <style>
    th,td {
     border: 1px solid black;
    border-radius: 10px;
    border-color: #96D4D4;
    }   
</style>
    </head>
<body>
    <div class="div container">
        <button class="btn btn-primary"><a href="user.php">Add User</a></button>
        <table>
            <tr>
                <th>Serial No</th>
                <th>Name</th>
                <th>Email</th>
                <th>Mobile</th>
                <th>Password</th>
                <th>Operation</th>
            </tr>

            
            <?php
            $sql = "Select *from `crud`";
            $result = mysqli_query($con, $sql);
            if ($result) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $id = $row['id'];
                    $name = $row['name'];
                    $email = $row['email'];
                    $mobile = $row['mobile'];
                    $password = $row['password'];
                    echo "<tr>
                    <td> {$id}</td>
                    <td> {$name}</td>
                    <td> {$email}</td>
                    <td> {$mobile}</td>
                    <td> {$password}</td>
                    <td> 
                    <button><a href='$link_address1?update_id=".$id."'>Update User</a></button>
                    <button><a href='$link_address2?delete_id=".$id."'>Delete User</a></button>
                    </td>
                    </tr>";
                }
            }

            ?>



   
        </table>
        </div>

</body>

</html>