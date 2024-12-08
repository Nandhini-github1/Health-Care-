<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
</head>
<style>
body
{
background-image:url('regi.jpg');
background-repeat: no-repeat;
background-attachment: fixed;
background-size: cover;
}
.table2
{
border-radius:25px;
background-color:#F0F1F3;
border: 1px solid #1A8497;
padding-right:3%;
padding-top:10px;
width: 25%;
height:30%;
box-shadow:10px 10px 5px gray;
}
th, td 
{
  padding: 10px;
  text-align: center;
  color:black;
  
}
.submit-btn {
            padding: 3px 120px;
            font-size: 16px;
			background-color:#1A8497;
}
.submit-btn2 {
            padding: 3px 50px;
            font-size: 10px;
			background-color:#1A8497;
}				
</style>
<body>
<center>
<form method="POST">
<img src="l1.gif" style="height:15%;width:15%;padding-left:0%;border-radius: 20px">
<center><h3 style="font-family: Arial, sans-serif;color:#1A8497">"On our health care tips website, please register by filling out the form below. After registration, you will be get our Tips."</h3></center>
<h2 style="color:#1A8497"><u>Registration Form for Health Care</u></h2>
<br><br>
<div class="table2">
<table style="table2">
<tr><th style="color:black">Name</th><th><input type="text" value="" name="name" required></th></tr>
<tr><th style="color:black">Age</th><th><input type="number" value="" name="age" required></th></tr>
<tr><th style="color:black">Blood Pressure</th><th><input type="text" value="" name="bp" required></th></tr>
<tr><th style="color:black">Sugar</th><th><input type="text" value="" name="sugar" required></th></tr>
<tr><th style="color:black">Problem</th><th><input type="text" value="" name="problem" required></th></tr>
<tr><th style="color:black">Phone Number</th><th><input type="tel" value="" name="phoneno" ></th></tr>
<tr><th style="color:black">username:</th><th><input type="text" id="" name="username" required></th></tr>
<tr><th style="color:black">password:</th><th><input type="password" id="" name="password" required></th></tr><br>
<tr><th colspan='3' style="text-align:center;"><input type="submit" name="register" value="Register->" class="submit-btn"></th></tr>
<tr><th colspan='3' style="text-align:center;">Already have an Account?Log in</th></tr>
<tr><th colspan='3' style="text-align:center;"><input type="submit" onclick="window.location.href='login.php'"value="Log in" class="submit-btn2"></th></tr>
</div>
</table>
</center>
</form>
<script>
function login()
{
window.location.href='login.php';
}
</script>
<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "regi";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error)
	{
    die("Connection failed: " . $conn->connect_error);
    }
	
if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['register']))
 {
   $name=$_POST['name'];
   $age=$_POST['age'];
   $bp=$_POST['bp'];
   $sugar=$_POST['sugar'];
   $problem=$_POST['problem'];
   $phoneno=$_POST['phoneno'];
   $username=$_POST['username'];
   $password=$_POST['password'];
   $sql="INSERT INTO tb (name,age,bp,sugar,problem,phoneno,username,password)VALUES
	('$name',$age,$bp,$sugar,'$problem',$phoneno,'$username',$password)";
    if ($conn->query($sql) === TRUE) 
	{
        //$_SESSION['registration_success'] = true;
        header("Location: login.php");
    }
	else 
	{
        $register_error = "Error registering user.";
    }

}
?>
   
</body>
</html>
