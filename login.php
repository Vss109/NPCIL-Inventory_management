<?php 
include("connection.php"); 
if(isset($_POST["login"]))
{
    header('Location: welcome.html');
}


?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>login</title>
</head>
<body>
    <div class="container">
        <form action="#" method="POST">
            <div class="title">
                LOGIN FORM 
</div>

<div class="form">
<div class="input_field">
    <label>Username</label>
    <input type="text" class="input" name="username">
</div>

<div class="input_field">
    <label>Paasword</label>
    <input type="password" class="input" name="password">
</div>

<div class="input_field">
 <input type="submit" value="login" class="btn" name="login">
</div>
</div>
</form>
</div>
</body>
</html>


<?php
if($_POST['login'])
{
    $username = $_POST['username'];
    $password = $_POST['password'];
   

   $query =  "INSERT INTO tb_login(username,password) VALUES('$username','$password')";
   $data = mysqli_query($conn,$query);

   if($data)
   {
    echo "login successful";
   }
   else
   {
    echo "Failed";
   }
}
?>
