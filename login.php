<?php
//session_start();
/*if (isset($_SESSION['registration_success']) && $_SESSION['registration_success']) 
{
	$registration_success = true;
    unset($_SESSION['registration_success']);
}*/
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "regi";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error);
}
if(isset($_POST['login'])) 
{
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql2 = "SELECT username,password FROM tb WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql2);
    if ($result->num_rows == 1 ) {
        //$_SESSION['username'] = $username;
        header("Location: health.html");
    } else {
        echo "Invalid username or password.";
		 header("Location: register.php");
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Login Form</title>
<style>
body
{
background-image:url('st.jpg');
background-repeat: no-repeat;
background-attachment: fixed;
background-size: cover;
}
.login
	{
		padding-right:0%;
		
        padding-top:1px;
		border: 1px solid #1A8497;
		width: 20%;
        
	}
th, td 
{
  padding: 10px;
  text-align: center;
  color:black;
}
.submit-btn 
{
            padding: 3px 120px;
            font-size: 16px;
			background-color:#1A8497;
}
.table
{
	padding-left:40%;
}	
	
</style>
</head>
<body>
    <?php if (isset($registration_success) && $registration_success) { ?>
        <center><p style="font-size:30px">Registration successful.You can now log in.</center></p>
    <?php } ?>
	<center>
    <h2>Login Form</h2>
    <form action="" method="post">
	<div class="table">
	<table class="login">
        <tr><th><label for="username">Username:</label></th></tr><br><br>
        <tr><td><input type="text" id="username" name="username" required></td></tr><br><br>
        <tr><th><label for="password">Password:</label></th></tr><br><br>
        <tr><td><input type="password" id="password" name="password" required></td></tr><br><br>
        <tr><th ><input type="submit" name="login" value="Login" class="submit-btn"></th></tr>
	</table>
	</div>
</form>
</center>
</body>
</html>
