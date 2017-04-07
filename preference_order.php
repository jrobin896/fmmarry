<!DOCTYPE html>
<html>
<head>
	<title>Preference Order</title>
	<style type="text/css">
		body{
	        background-color:#c1bdba;
	        color:#ffffff;
        }
        .sign{
	        background-color:#13232f;
	        padding:40 px;
	        max-width:600px;
	        margin:40 px auto;
	        border-radius:4 px;
	        box-shadow:0 2px 1px 2px #13232f;
	        color:#ffffff;
        }
	</style>
</head>
<body>
	<br><br><br><br><br>
        <center>
        <div class="sign">
            <br><br>
            <p><font size="6">Preference order</font></p><br>
            <form name="preference_order" method="POST" onsubmit="login.php">
                Username &nbsp&nbsp 
                <input type="text" name="uname" placeholder="Enter Your Username*" size="40"><br><br>
                Password &nbsp&nbsp
                <input type="password" name="pswd" placeholder="Enter Your Password*" size="40"><br><br>
                <input class="button" type="submit" name="submit" value="Submit"><br>
                <p>If New?</p>
                <a href="signup1.php"><div class="button">Sign up</div></a>
                <br><br><br>
                </center>
            </form>
        </div>
</body>
</html>