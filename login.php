<?php
if (isset($_POST['submit']))
{
    include("include/database_connection.php");
    session_start();
    $username=$_POST['uname'];
    $password=$_POST['pswd'];

    $_SESSION['username']=$username;

    $sql=mysql_query("select * from fmmarry where username='$username'");
    $row=mysql_fetch_array($sql);

    $_SESSION['profile_for']=$row['profile_for'];
    $_SESSION['first_name']=$row['first_name'];
    $_SESSION['last_name']=$row['last_name'];
    $_SESSION['gender']=$row['gender'];
    $_SESSION['dob']=$row['dob'];
    $_SESSION['mail_id']=$row['mail_id'];
    $_SESSION['mobile_number']=$row['mobile_number'];
    $_SESSION['password']=$row['password'];
    $_SESSION['complexion']=$row['complexion'];
    $_SESSION['hobbies']=$row['hobbies'];
    $_SESSION['religion']=$row['religion'];
    $_SESSION['current_city']=$row['current_city'];
    $_SESSION['education']=$row['education'];
    $_SESSION['occupation']=$row['occupation'];
    $_SESSION['more_details']=$row['more_details'];
    $_SESSION['preference_st']=$row['preference_status'];

    if (strcmp($row['password'],$password)==0) {
        $_SESSION['loginst']=1;
        header("Location: profile.php");
    }
    else{
        echo "<script>alert('Either the username or the paswword entered is wrong!')</script>";
    }
}

?>




<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <style>
        body{
        background-image: url("image/bg1.jpg");
        background-repeat: no-repeat;
        background-size: cover;
        color:#ffffff;
        }
        .sign{
        background-color:#0093f9;
        padding:40 px;
        max-width:600px;
        margin-top: 15px;
        margin:40 px auto;
        border-radius:4 px;
        color:#ffffff;
        opacity: 0.6;
        }
        input[type=text]{
        width: 95%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        }
        input[type=password]{
        width: 95%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
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
        </style>
    </head>
    <body>
        <br><br><br><br><br>
        <center>
        <div class="sign">
            <br><br>
            <p><font size="6">Welcome to Find Meet and Marry</font></p><br>
            <form name="login" method="POST" onsubmit="login.php">
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