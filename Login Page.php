<html>
<head>
<title>Login Page</title>
</head>
<body>
<?php
require('Registration_form.php');
if(isset($_POST['sub']))
{
$name=$_POST['Username'];
$password=$_POST['password'];
$sql="select * from userregistration where Username='$name'and password='$password'";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
	echo"Success!!";
}
else
{
	echo "Login Failed...";
}
mysqli_close($conn);
}
else
{
?>
<form method="POST" action="" >
<h1>Login Page</h1>
<label>Username</label>
<input type="text" name="Username" ><br><br>
<label>Password</label>
<input type ="password" name="password" ><br><br>
<input type="submit" name="sub" value="Submit"><br><br>
<a href="Registration Page.php">New User? Register here!</a>
<?php
}
?>
</form>
</body>
</html>