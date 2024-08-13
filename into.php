<?php
require 'main.php';
if(isset($_POST["submit"])){
    $name=$_POST["name"];
    $email=$_POST["email"];
    $password=$_POST["password"];
    $phone=$_POST["phone"];
$query="INSERT INTO table1 VALUES('','$name','$email','$password','$phone')";
mysqli_query($conn,$query);
header('Location:login.php');
}


?>

<script>
    alert("register successfully");
</script>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>reg form</h1>
    <form method="post" action="">
        <span >name:</span>
        <input name="name" type="text"><br>
        <span>email:</span>
        <input name="email" type="text"><br>
        <span>password:</span>
        <input name="password" type="password"><br>
        <span>phone:</span>
        <input name="phone" type="text"><br>
        <input type="submit" name="submit" value="register">

        
    </form>
</body>
</html>