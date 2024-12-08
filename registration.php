<html>
<head>
    <title>Registration Form</title>
	<style>
.b2
{
background-color:#F2DCE3;
padding:5px 10px;
border-radius:30px;
}
body
{
background-image:url('login.jpg');
background-repeat: no-repeat;
background-attachment: fixed;
background-size: cover;
}
.table2
{
padding-right:30%;
 padding-top:60px;
 width: 30%;
 height:30%;
}
th, td 
{
  color:black;
  padding: 10px;
  text-align: center;
}
</style>
</head>
<body>
<center>
<div class="table2">
<form action="" method="post">
<h2 style="color:white;">Registration Form</h2>
<br><br>
<table>
<tr><th style="color:white;">Name</th><th><input type="text" value="name" name="name" required style="background-color:#6e23b0;color:white;"></th></tr>
<tr><th style="color:white;">Age</th><th><input type="number" value="age" name="age" required style="background-color:#6e23b0;color:white;"></th></tr>
<tr><th style="color:white;">Blood Pressure</th><th><input type="text" value="bp" name="bp" required style="background-color:#6e23b0;color:white;"></th></tr>
<tr><th style="color:white;">Sugar</th><th><input type="text" value="sugar" name="sugar" required style="background-color:#6e23b0;color:white;"></th></tr>
<tr><th style="color:white;">Problem</th><th><input type="text" value="problem" name="problem" required style="background-color:#6e23b0;color:white;"></th></tr>
<tr><th style="color:white;">Phone Number</th><th><input type="tel" value="phoneno" name="phoneno" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required style="background-color:#6e23b0;color:white;"></th></tr>
<tr><th style="color:white;">username:</th><th><input type="text" id="username" name="username" required style="background-color:#6e23b0;color:white;"></th></tr>
<tr><th style="color:white;">password:</th><th><input type="password" id="password" name="password" required style="background-color:#6e23b0;color:white;"></th></tr>
</table>
<input type="submit" name="register" value="Register">
<input type="submit" name="Edit" value="Edit">
<input type="submit" name="Log out" value="Log out">
</form>
<?php
$servername="localhost";
$username="root";
$password="";
$dbname="regi";
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
{
	echo 'Connected';
}
if(isset($_POST[register]))
{
	$name=$_POST('name');
	$age=$_POST('age');
	$bp=$_POST('bp');
	$sugar=$_POST('sugar');
	$problem=$_POST('problem');
	$phoneno=$_POST('phoneno');
	$username=$_POST('username');
	$password=$_POST('password');
	$sql="INSERT INTO tb (name,age,bp,sugar,problem,phoneno,username,password)VALUES
	('$name',$age,$bp,$sugar,'$problem',$phoneno,'$username',$password)";
	if($conn->query($sql)==TRUE
	{
		echo 'Registered successfully';
	}
	else
	{
		echo 'Error';
	}
?>
</body>
</html>
