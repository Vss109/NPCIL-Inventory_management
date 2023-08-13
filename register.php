<?php 
    include("connection.php"); 
    if(isset($_POST["register"]))
{
    header('Location: table.php');
}

 
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>registration</title>
</head>
<body>
    <div class="container">
        <form action="#" method="POST">
            <div class="title">
                ELECTONIC REGISTER REGISTRATION 
</div>

<div class="form">
<div class="input_field">
    <label>First Name</label>
    <input type="text" class="input" name="fname">
</div>

<div class="input_field">
    <label>Last Name</label>
    <input type="text" class="input" name="lname">
</div>

<div class="input_field">
    <label>Email</label>
    <input type="email" class="input" name="email">
</div>

<div class="input_field">
    <label>Date</label>
    <input type="date" class="input" name="date">
</div>

<div class="input_field">
    <label>In Time</label>
    <input type="time" class="input" name="in_time">
</div>

<div class="input_field">
    <label>Out Time</label>
    <input type="time" class="input" name="out_time">
</div>

<div class="input_field">
    <label>Phone number</label>
    <input type="tel" class="input" name="phone_number">
</div>

<div class="input_field">
 <input type="submit" value="register" class="btn" name="register">
</div>

</div>
</form>
</div>
</body>
</html>
<?php
    if($_POST['register'])
{
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $date = $_POST['date'];
    $in_time = $_POST['in_time'];
    $out_time = $_POST['out_time'];
    $phone_number = $_POST['phone_number'];

   $query =  "INSERT INTO tb_register (First_name,Last_name,Email,Date,In_time,Out_time,Phone_number) VALUES('$fname','$lname','$email','$date','$in_time','$out_time','$phone_number')";
   $data = mysqli_query($conn,$query);

   if($data)
   {
    echo "Data Inserted Into Database";
   }
   else
   {
    echo "Failed";
   }
}
?>
