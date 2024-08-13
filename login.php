<?php
$conn=mysqli_connect("localhost","root","","good");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" action="login.php">
        <span >email:</span>
        <input name="email" type="text"><br>
        <span>password:</span>
        <input name="password" type="text"><br>
</form>

<?php
    $email=$_POST['email'];
    $password=$_POST['password'];
    $detail="SELECT email,password FROM table1";

    $res=mysqli_query($conn,$detail);
    $fin=mysqli_fetch_all($res,MYSQLI_ASSOC);
    foreach($fin as $dat)
    {
        if($email==$dat['email'] && $password==$dat['password'])
        {
            header('location:register.php');
        }
        else{
            echo 'error';
        }
    }

?>
</body>
</html>
