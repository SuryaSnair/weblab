<html>
<head>
<title>Application Form</title>
<style>
	th,td{
		width:150px;
		text-align:left;
		
	}
	marquee{
		color:red;
		font-weight:bold;
		font-size:25px;
	}
	
	button
	{
		
		font-weight:bold;
		font-size:15px;
		color:white;
		border: none;
		padding:10px;
		border-radius:5px;
	}
	
</style>

	</head>
	
	
<body  style="background-image: url('application.jpg');background-size: cover;">
<h1 style="text-align:center">WELCOME TO FRESHERS WORLD!!!</h1>

<form method="POST" action="#">
<table border="0" frame="box" cellpadding="10"  style="background:#ffffff;border:4px solid black;padding:8px" align="center">
<tr><th colspan="3" style="text-align:center;font-size:25px" height="50px">Registration Form</th></tr>
<tr>
<th>Name</th>
<td colspan="2"><input size="50" name="name" id="name" type="text" required></td></tr>


<tr>

<th>Email id</th>
<td colspan="2"><input size="50" name="email" id="email" type="text" required></td></tr>
<tr>

<tr>
<th>Mobile</th>
<td colspan="2"><input size="50" name="mobile" id="mobile" type="text" required></td></tr>
<tr>
<tr>
<th>Password</th>
<td colspan="2"><input size="50" id="password" type="password" name="password" required></td></tr>
<tr>
<th>Re-enter Password</th>
<td colspan="2"><input size="50" id="password1" type="password" name="password1" required></td></tr>

<tr>

<td colspan="3" style="text-align:center;">
<button type="reset" style="background-color:#f54542;" >RESET</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<button type="submit" name="submit" style="background-color:#4CAF50;">SUBMIT</button></td></tr>


</table>
</form>
<?php
	if(isset($_POST['submit']))
	{
		$name=$_POST['name'];
		$mobile=$_POST['mobile'];
		$email=$_POST['email'];
		$password=$_POST['password'];
		$password1=$_POST['password1'];
		if($name==''||$mobile==''||$password==''||$password1==''||$email=='')
		{
			echo "<script>alert('All Fields need to be filled')</script>";
		}
		if(!ctype_alpha($name))
		
		{
			echo "<script>alert('Only alphabets allowed in Name')</script>";
		
		}
		else if(!is_numeric($mobile))
		{
			echo "<script>alert('Only numbers allowed in Mobile Number')</script>";
		
		}
		else if(strlen($mobile)!=10)
		{
			echo "<script>alert('Invalid Mobile Number')</script>";
		
		}
		else if($password1!=$password)
		 {
			echo "<script>alert('The passwords do not match')</script>";
		}
		else if(strlen($password)<6 or strlen($password)>12 )
		{
			echo "<script>alert('Password length should be between 6-12 characters long')</script>";
		}
		
		
		
	}
	
	
	
	
	?>
</body></html>