<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>
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
$pass=$_POST['password'];
$con=mysqli_connect($servername,$username,$password,$database);
$sql="INSERT INTO `admin-login`(`username`, `password`) VALUES ('$user','$pass')";
$result=mysqli_query($con,$sql);
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
    <h1>Admin Login</h1>
    <form action="/akhila/admin-login.php" method="post">
        <label for="admin-username">Username:</label>
        <input type="text" id="admin-username" name="username" required><br><br>
        <label for="admin-password">Password:</label>
        <input type="password" id="admin-password" name="password" required><br><br>
        <button type="submit">Login</button>
    </form>
</body>
</html>
