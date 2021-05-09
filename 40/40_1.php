<!DOCTYPE html>
<html>
<head>
<title>Registertion</title>
</head>
<style type="text/css">
body{
background: url(https://cdn2.vectorstock.com/i/1000x1000/65/56/cycling-race-stylized-background-cyclist-vector-22656556.jpg);
background-repeat: no-repeat;
background-position: center;
background-attachment: fixed;
background-size: 100%;
}
input,select {
height: 40px;
width: 300px;
font-size: 15px;
font-weight: bold;
border-top-left-radius: 15px;
border-bottom-right-radius: 15px;
border-bottom-left-radius: 15px;
border-top-right-radius: 15px;
}
.input1{
height: 40px;
width: 300px;
font-size: 15px;
font-weight: bold;
border-top-left-radius: 15px;
border-bottom-right-radius: 15px;
border-bottom-left-radius: 15px;
border-top-right-radius: 15px;
}
td{
font-size: 20px;
font-weight: bold;
}
.button1{
height: 50px;
width: 150px;
border-top-left-radius: 25px;
border-bottom-right-radius: 25px;
border-bottom-left-radius: 25px;
border-top-right-radius: 25px;
background: red;
border-style: outset;
color: black;
}
.button1:hover{
background: orange;
}
.div1{
height: 500px;
width: 40%;
background: gray;
vertical-align: middle;
margin-top: 30px;
margin-left: 350px;
padding-top: 20px;
background: rgba(255,255,255,.2);
box-shadow: 0 5px 15px rgba(0,0,0,.8);
}
.img1{
padding-top: 0px;
vertical-align: middle;
height: 100px;
width: 100px;
}
.a11{
font-size: 30px;
padding-top: 0px;
display: inline-block;
color: black;
margin-left: 10px;
vertical-align: middle;
}
.div12{
height: 100px;
width: 98%;
padding-left: 20px;
background: lightblue;
}
</style>
<body>
<div class="div1">
<center>
<h1><header><font size="8">Sign Up</header></h1></font></h1>
<form method="POST" action="40_6.php">
<table>
<tr>
<td><input type="text" name="Username" placeholder=" Enter your Username"></td>
</tr>
<tr>
<td><input type="text" name="contact" pattern="[0-9]{10}" placeholder=" Enter your contact number"></td>
</tr>
<tr>
<td><input type="email" name="Email" placeholder=" Enter your E-mail address"></td>
</tr>
<tr>
<td>
<input type="text" name="gender" list="gender" placeholder=" Select Gender">
<datalist id="gender">
<option value="Male"></option>
<option value="Female"></option>
</datalist>
</td>
</tr>
<tr>
<td><input type="password" name="pass" placeholder=" Enter your password"></td>
</tr>
<tr>
<td><input type="password" name="cpass" placeholder=" Confirm your password"></td>
</tr>
</table></br>
<input class="button1" type="submit" name="submit" value="Submit">
<input class="button1" type="reset" name="reset" value="Reset">
</form>
</center>
</div>
</body>
</html>