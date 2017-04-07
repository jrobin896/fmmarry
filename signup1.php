<?php
if (isset($_POST['submit']))
{
	include("include/database_connection.php");
	$username=$_POST['user'];
	$profile_for=$_POST['profilefor'];
	$first_name=$_POST['fname'];
	$last_name=$_POST['lname'];
	$gender=$_POST['gender'];
	$dob=$_POST['dob'];
	$mail_id=$_POST['mail'];
	$mobile_number=$_POST['mobile'];
	$password=$_POST['pass'];
	$cpassword=$_POST['pass2'];

	session_start();
	$_SESSION['username']=$username;
	$_SESSION['profile_for']=$profile_for;
	$_SESSION['first_name']=$first_name;
	$_SESSION['last_name']=$last_name;
	$_SESSION['gender']=$gender;
	$_SESSION['dob']=$dob;
	$_SESSION['mail_id']=$mail_id;
	$_SESSION['mobile_number']=$mobile_number;
	$_SESSION['password']=$password;

	$sql=mysql_query("select count(*),password from fmmarry where username='$username'");
	$row=mysql_fetch_array($sql);
	
	if ($row['count(*)']!=0) {
		echo "<script>
				alert('The username has already been taken please chose another one!');
			</script>";
	}
	else{
		if (strcmp($password,$cpassword)!=0) {
			echo "<script>
				alert('Please provide the same password in (create your password) and (confirm password) field!');
			</script>";
		}
		else{
			header("Location: signup2.php");
		}
	}

}
?>








<!DOCTYPE html>
<html>
<head>
	<title>SignUp: Step - 1</title>
	<style type="text/css">
		body{
                background-image: url("image/bg2.jpg");
                background-repeat: no-repeat;
                background-size: cover;
                color:#ffffff;
            }
            .sign{
                background-color:#0093f9;
                padding:40 px;
                width:800px;
                margin-top: -90px;
                margin:40 px auto;
                border-radius:4 px;
                color:#ffffff;
                opacity: 0.6;
            }
            .details {
                background-color: #020280;
                color: white;
                position: relative;
                width:600px;
                border-radius:4 px;
            }
            .button {
                background-color: transparent;
                color: #020280;
                font-weight: bold;
                padding: 10px 27px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                border:2px solid #020280;
                font-size: 14px;
            }
            .button:hover {
                background-color: #020280;
                color: white;
                padding: 10px 27px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                border:2px solid white;
                font-size: 14px;
            }
            .bold{
                color: #d8ecf9;
            }
            th{
				color: #ffd6ff;
				font-size: 16px;
				font-family: "Segoe UI Light","Segoe UI",Arial,Helvetica,sans-serif;
				border-bottom: 1px solid #ffd6ff;
				padding-right: 10px;
				padding-left: 10px;
				padding-bottom: 7px;
				text-align: center;
			}
			td{
				color: #ffd6ff;
				font-size: 16px;
				font-family: "Segoe UI Light","Segoe UI",Arial,Helvetica,sans-serif;
				padding-right: 10px;
				padding-left: 10px;
				padding-top: 7px;
				padding-bottom: 7px;
				text-align: center;
			}
	</style>
</head>
<body>
	<br><br><br><br><br>
        <center>
        <div class="sign">
           	<br>
           	<br>
           	<font size="6">SignUp</font>
           	<br>
           	<br>	
           	<br>
            <div class="details">
				<br>
				<br>
				<form name="step1" method="POST" onsubmit="signup1.php">
				<fieldset>
					<legend>Step 1 of 2</legend>
					<center>
					<table class="box" id="input" cellpadding="15px">
						<tr>
							<td>Matrimony Profile for</td>
							<td>
								<select name='profilefor' width='17' id='profilefor' required>
									<option selected disabled>Create Profile for</option>
									<option value='self'>Self</option>
									<option value='son'>Son</option>
									<option value='daughter'>Daughter</option>
									<option value='brother'>Brother</option>
									<option value='sister'>Sister</option>
									<option value='relative'>Relative</option>
									<option value='friend'>Friend</option>
								</select>
							</td>
						</tr>
				        <tr>
							<td>First Name</td>
							<td><input type="text" name="fname" style="text-transform: capitalize;" required></td>
						</tr>
						<tr>
							<td>Last Name</td>
							<td><input type="text" name="lname" style="text-transform: capitalize;" required></td>
						</tr>
						<tr>
							<td>Gender</td>
							<td><input type="radio" name="gender" value="male" required checked>Male<br>
							<input type="radio" name="gender" value="female">Female</td>
						</tr>
						<tr>
							<td>Date Of Birth</td>		
							<td><input type='date' name='dob' id='dob' required/></td>
						</tr>

						<tr>
							<td>Mail ID</td>
							<td><input type="email" name="mail"  required></td>
						</tr>

						<tr>
							<td>Mobile Number</td>
							<td><input type="text" name="countrycode" size="1" value="+91" disabled><input type="text" name="mobile" size="14" required></td>
						</tr>
	
						<tr>
							<td>Choose your username</td>
							<td><input type="text" size='20' name='user' oninput="" id='user' required /></td>
						</tr>
						<tr>
							<td>Create your password</td>
							<td><input type='password' size='20' name='pass' id='pass' required/></td>
						</tr>
						<tr>	
							<td>Confirm your password</td>
							<td><input type='password' size='20' name='pass2' id='pass2' required/></td></tr>

					</table>
					</center>
				</fieldset>
				<br>
				<br>
			</div>
		<br><br>
		<center><input class="button" type="submit" name="submit" value="Step 2"></center>
				</form>
		<br>
		<br>
		<br>
		</div>
</body>
</html>