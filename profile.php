<?php
    session_start();
    if ($_SESSION['loginst']!=1) {
        header("location:login.php");
    }
    include("include/database_connection.php");
    $username=$_SESSION['username'];
    $profile_for=$_SESSION['profile_for'];
    $first_name=$_SESSION['first_name'];
    $last_name=$_SESSION['last_name'];
    $gender=$_SESSION['gender'];
    $dob=$_SESSION['dob'];
    $mail_id=$_SESSION['mail_id'];
    $mobile_number=$_SESSION['mobile_number'];
    $password=$_SESSION['password'];
    $complexion=$_SESSION['complexion'];
    $hobbies=$_SESSION['hobbies'];
    $religion=$_SESSION['religion'];
    $current_city=$_SESSION['current_city'];
    $education=$_SESSION['education'];
    $occupation=$_SESSION['occupation'];
    $more_details=$_SESSION['more_details'];
    $preference_st=$_SESSION['preference_st'];

?>






<!DOCTYPE html>
<html>
    <head>
        <title>My profile</title>
        <style>
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
                margin-top: -40px;
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
                font-weight: 900;
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
            td{
                text-align: center;
                font-weight: strong;
                font-size: 20px;
            }
            .bold{
                color: #d8ecf9;
            }
        </style>
    </head>
    <body>
        <br><br><br><br><br>
        <center>
        <div class="sign">
            <br>
            <br>
            <font size="6">Welcome 
                <?php
                    if (strcmp($gender,'male')==0) {
                        echo "Mr ".ucwords($first_name)." ".ucwords($last_name);
                     }
                     else {
                        echo "Miss ".ucwords($first_name)." ".ucwords($last_name);
                      } 
                ?>
            </font>
            <br>
            <br>
            <font style="font-size:20px;">Your details</font>
            <br>
            <br>
            <div class="details">
                <br>
                <br>
                <table>
                    <tr>
                        <td class="bold"><b>First Name:</b></td>
                        <td><?php echo ucwords($first_name); ?></td>
                    </tr>
                    <tr>
                        <td class="bold"><b>Last Name:</b></td>
                        <td><?php echo ucwords($last_name); ?></td>
                    </tr>
                    <tr>
                        <td class="bold"><b>Date Of Birth:</b></td>
                        <td><?php echo date("d/m/Y",strtotime($dob)); ?></td>
                    </tr>
                    <tr>
                        <td class="bold"><b>Mail Id:</b></td>
                        <td><?php echo $mail_id; ?></td>
                    </tr>
                    <tr>
                        <td class="bold"><b>Mobile Number:</b></td>
                        <td><?php echo $mobile_number; ?></td>
                    </tr>
                    <tr>
                        <td class="bold"><b>Hobbies:</b></td>
                        <td><?php echo $hobbies; ?></td>
                    </tr>
                    <tr>
                        <td class="bold"><b>Religion:</b></td>
                        <td><?php echo $religion; ?></td>
                    </tr>
                    <tr>
                        <td class="bold"><b>Current City:</b></td>
                        <td><?php echo $current_city; ?></td>
                    </tr>
                    <tr>
                        <td class="bold"><b>Education Details:</b></td>
                        <td><?php echo $education; ?></td>
                    </tr>
                    <tr>
                        <td class="bold"><b>Occupation:</b></td>
                        <td><?php echo $occupation; ?></td>
                    </tr>
                    <tr>
                        <td class="bold"><b>About Yourself:</b></td>
                        <td><?php echo $more_details; ?></td>
                    </tr>
                </table>
                <br>
                <br>
            </div>
            <br>
            <br>
            <a href="findmatch.php"><div class="button">Find your match</div></a>
            <a href="logout.php"><div class="button">Logout</div></a>
            <br>
            <br>
            <br>
        </div>
    </body>
</html>