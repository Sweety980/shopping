<html>
<head>
<style type="text/css">
body{
background-image: url(https://images.unsplash.com/photo-1483726234545-481d6e880fc6?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1000&q=80);
background-size: 100%;
}
</style>
<?php
$Username=$_POST['Username'];
$contact=$_POST['contact'];
$Email=$_POST['Email'];
$gender=$_POST['gender'];
$pass=$_POST['pass'];
$con=mysqli_connect("Localhost","root","","cycle");
$sql="insert into details(Username,contact,Email,gender,pass) values ('$Username','$contact','$Email','$gender','$pass')";
if(mysqli_query($con,$sql))
{
header("location:40.php");
echo "<h1>"."record succesfully inserted"."</h1>";
}
else
{
die(mysqli_error($con));
}
mysqli_close($con);
?>
</head>
</html>