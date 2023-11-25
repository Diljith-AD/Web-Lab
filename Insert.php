<html>
<body>
<?php
require('Registration_form.php');
if(isset($_POST['sub']))
{	
$username=$_POST['Username'];
$firstname=$_POST['FirstName'];
$lastname=$_POST['LastName'];
$emailid=$_POST['emailid'];
$mobno=$_POST['mobno'];
$dob=$_POST['dob'];
$password=$_POST['password'];
$sql="insert into userregistration(Username,firstname,lastname,emailid,mobno,dob,password)values('$username','$firstname','$lastname','$emailid','$mobno','$dob','$password')";
$result=mysqli_query($conn,$sql);
if($result)
{
	echo"new records succesfully created";
}
mysqli_close($conn);
}
else
{
	?>
<form method="POST"action=" ">
<h1>Registration Page</h1><br><br>
<div>
Username<input type="text" name="Username" value=""><br><br>
First Name<input type="text" name="FirstName" value=""><br><br>
Last Name<input type="text" name="LastName" value=""><br><br>
Email ID<input type="text" name="emailid" value=""><br><br>
Mobile Number<input type="number" name="mobno" value=""><br><br>
Date Of Birth<input type="date" name="dob" value=""><br><br>
Password<input type="Password" name="password" value=""><br><br>
<input type="submit" name="sub" value="Submit">
</div>
<?php
}
?>
</form>
</body>
</html>