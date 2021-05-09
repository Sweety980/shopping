<!DOCTYPE html>
<html>
<head>
<title>Forgot Password</title>
<style type="text/css">
body{
background-image: url(https://static.scientificamerican.com/sciam/cache/file/0AFEBE44-BADA-49A1-81BC1B0877541D26.jpg);
background-position: center;
background-repeat: no-repeat;
background-attachment: fixed;
background-size: 100%;
}
.div1{
height: 350px;
width: 37%;
background: gray;
margin-top: 100px;
margin-left: 350px;
padding-top: 20px;
background: rgba(255,255,255,.2);
box-shadow: 0 5px 15px rgba(0,0,0,.8);
}
.button1{
background: red;
color: white;
}
.button1:hover{
background: orange;
}
input{
height: 40px;
width: 350px;
font-size: 15px;
font-weight: bold;
border-top-left-radius: 10px;
border-bottom-right-radius: 10px;
border-bottom-left-radius: 10px;
border-top-right-radius: 10px;
}
td{
padding: 6px;
text-align: center;
font-size: 25px;
font-weight: bold;
}
	</style>
</head>
<body>
<div class="div1">
<center>
<h1><header><font size="8">Forgot Password?</font></header></h1>
<form method="post" action="40_4.php">
<table>
<tr>
<td><input type="Username" name="Username" placeholder="Enter Username"></td>
</tr>
<tr>
<td><input type="password" name="pass" placeholder="Enter new password"></td>
</tr>
</table></br>
<input class="button1" type="submit" name="change password" value="change password">
</center>
</form>
</div>
</body>
</html>