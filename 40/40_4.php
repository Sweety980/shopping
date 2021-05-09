<!DOCTYPE html>
<html>
<head>
<title>check</title>
</head>
<style type="text/css">
body{
background: url(https://static.scientificamerican.com/sciam/cache/file/0AFEBE44-BADA-49A1-81BC1B0877541D26.jpg);
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
header("location:40.php");
}
else
{
header("location:40.php");
}
?>
</body>
</html>
