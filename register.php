<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
</head>
<body align="center">
<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
$servername="localhost";
$username="root";
$password="";
$database="akhila";
$user=$_POST['username'];
$email=$_POST['email'];
$pass=$_POST['pass'];
$cpass=$_POST['cpass'];
$con= mysqli_connect($servername,$username,$password,$database);
$sql="INSERT INTO `register`(`username`, `email`, `pass`, `cpass`) VALUES ('$user','$email','$pass','$cpass')";
$result= mysqli_query($con,$sql);
if($result)
{
   echo "successfully inserted";
}
else
{
   echo "Not successfully inserted";
}
}
?>
    <h1>Register</h1>
    <form action="/akhila/register.php" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="pass" required><br><br>
        <label for="confirm_password">Confirm Password:</label>
        <input type="password" id="confirm_password" name="cpass" required><br><br>
        <button type="submit">Register</button>
    </form>
</body>
</html>
