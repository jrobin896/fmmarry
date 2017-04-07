<?php
if (isset($_POST['submit']))
{
	include("include/database_connection.php");
	session_start();

	$complexion=$_POST['complexion'];
	$hobbies=$_POST['hobbies'];
	$religion=$_POST['religion'];
	$current_city=$_POST['living'];
	$education=$_POST['edu'];
	$occupation=$_POST['occu'];
	$more_details=$_POST['more_details'];

	$_SESSION['complexion']=$complexion;
	$_SESSION['hobbies']=$complexion;
	$_SESSION['religion']=$religion;
	$_SESSION['current_city']=$current_city;
	$_SESSION['education']=$education;
	$_SESSION['occupation']=$occupation;
	$_SESSION['more_details']=$more_details;

	$username=$_SESSION['username'];
	$profile_for=$_SESSION['profile_for'];
	$first_name=$_SESSION['first_name'];
	$last_name=$_SESSION['last_name'];
	$gender=$_SESSION['gender'];
	$dob=$_SESSION['dob'];
	$mail_id=$_SESSION['mail_id'];
	$mobile_number=$_SESSION['mobile_number'];
	$password=$_SESSION['password'];

	$sql=mysql_query("insert into fmmarry (username,profile_for,first_name,last_name,gender,dob,mail_id,mobile_number,password,complexion,hobbies,religion,current_city,education,occupation,more_details) values ('$username','$profile_for','$first_name','$last_name','$gender','$dob','$mail_id','$mobile_number','$password','$complexion','$hobbies','$religion','$current_city','$education','$occupation','$more_details');");
	if($sql){
 		echo "<script>"
					."alert('You have Successfully Registered!');"
					."window.location.href='profile.php';"
				."</script>";
 	}
 	else{
 		echo "<script type='text/javascript'>alert('Error in Registration!')</script>";
	}

}
?>







<!DOCTYPE html>
<html>
<head>
	<title>SignUp: Step - 2</title>
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
			.link{
				text-decoration: none;
				color:white;
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
            <div class="details">
            <br>
            <br>
		<form name="step2" method="post" onsubmit="">
			<fieldset>
				<legend>Step 2 of 2</legend>
				<center>
				<table class="box" id="input" cellpadding="15px">
				<tr>
					<td>Complexion</td>
					<td><input type="number" name="complexion" id="complexion"><br>
					<a class="link" href="image.html" target="_blank"> Scale of complexion</a>
					</td>
				</tr>
				        <tr>
							<td>Hobbies</td>
							<td><input type="text" name="hobbies" required placeholder="Separate them by a ',' "></td>
						</tr>
						<tr>
							<td>Religion</td>
							<td><input type="text" name="religion" id="religion" required></td>
						</tr>
						<tr>
							<td>Living In</td>
							<td><input type="text" name="living" id="living" required></td>
						</tr>
						<tr>
							<td>Education</td>		
							<td><select name='edu' width='17' id='edu' required>
								<option selected disabled>Select</option>
								<option value='10th standard'>10th Standard</option>
								<option value='12th standard'>12th Standard</option>
								<option value='bachelors'>Bachelors</option>
								<option value='masters'>Masters</option>
								<option value='phd'>PhD</option>
								</select>
						</tr>
						<tr>
							<td>Occupation</td>
							<td><input type="text" size='20' name='occu' id='occu' required /></td></tr>
						<tr>
							<td>More about yourself</td>
							<td><textarea name="more_details" cols='20' rows='10' required></textarea></td>
						</tr>
						
				</table>
				</center>
			</fieldset>
			<br><br>
			</div>
			<br>
			<br>
			<center><input class="button" type="submit" name="submit" value="Sign Up"></center>
		</form>
		<br>
		<br>
	</div>
</body>
</html>