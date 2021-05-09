<!DOCTYPE html>
<html>
<head>
<title>check</title>
</head>
<style type="text/css">
body{
background: url(https://images.unsplash.com/photo-1483726234545-481d6e880fc6?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1000&q=80);
background-size: 100%;
}
</style>
<body>
<?php
session_start();
$Username=$_POST['Username'];
$pass=$_POST['pass'];
$con=mysqli_connect("localhost","root","","cycle");
$sql="select * from details where Username='$Username' and pass='$pass'";
$result=mysqli_query($con,$sql);
if($row=mysqli_fetch_array($result))
{
$_SESSION['Username']=$Username;
header("location:40_5.php");
}
else
{
echo "<h1>"."Wrong Username or Password"."</h1>";
}
?>
</body>
</html>
