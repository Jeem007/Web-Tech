<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method = "post" action = "<?php echo $_SERVER['PHP_SELF']?>" enctype = "multipart/form-data" >
    Select an Image
    <input type ="file"  name =" filename"> <br><br>
    <input type = "submit"  name= "submit">
    </form>
    
</body>
</html>