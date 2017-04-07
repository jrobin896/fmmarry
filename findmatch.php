<?php 
	session_start();
	if ($_SESSION['loginst']!=1) {
        header("location:login.php");
    }
    include("include/database_connection.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Our Suggestions!</title>
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
                width:1300px;
                margin:40 px auto;
                border-radius:4 px;
                color:#ffffff;
                opacity: 0.6;
            }
            .details {
                background-color: #020280;
                color: white;
                position: relative;
                width:1200px;
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
           	<font size="6">Our Suggestions!</font>
           	<br>
           	<br>	
           	<br>
            <div class="details">
            <?php
            	if (strcmp($_SESSION['gender'],'male')==0) {
            		$sgender='female';
            	}
            	else{
            		$sgender='male';
            	}
            	$sreligion=$_SESSION['religion'];
            	$seducation=$_SESSION['education'];
				$sql=mysql_query("select * from fmmarry where gender='{$sgender}' and religion='{$sreligion}' and education='{$seducation}';") or die($sql."<br/><br/>".mysql_error());
				echo "<table align='center'>"
						."<tr>"
							."<th>"."S No."."</th>"
							."<th>"."Name"."</th>"
							."<th>"."DOB"."</th>"
							."<th>"."Current City"."</th>"
							."<th>"."Educational Qualifications"."</th>"
							."<th>"."Occupation"."</th>"
							."<th>"."Mail ID"."</th>"
							."<th>"."Mobile Number"."</th>"
							."<th>"."Complexion Scale"."</th>"
							."<th>"."Hobbies"."</th>"
							."<th>"."Religion"."</th>"
							."<th>"."About"."</th>"
						."</tr>";
				$result=array();
				$i=1;
				while ($row=mysql_fetch_assoc($sql)) { 

					echo "<tr>"
							."<td>".($i)."</td>"
							."<td>".ucwords($row['first_name'].' '.$row['last_name'])."</td>"
							."<td>".$row['dob']."</td>"
							."<td>".ucwords($row['current_city'])."</td>"
							."<td>".ucwords($row['education'])."</td>"
							."<td>".ucwords($row['occupation'])."</td>"
							."<td>".$row['mail_id']."</td>"
							."<td>".$row['mobile_number']."</td>"
							."<td>".$row['complexion']."</td>"
							."<td>".$row['hobbies']."</td>"
							."<td>".$row['religion']."</td>"
							."<td>".$row['more_details']."</td>"
						."</tr>";
						$i++;
						$result[]=$row['username'];
				}
				$a=$i;
				$sql=mysql_query("select * from fmmarry where gender='{$sgender}' and religion='{$sreligion}';") or die($sql."<br/><br/>".mysql_error());
				while ($row=mysql_fetch_assoc($sql)) {
						if (in_array($row['username'], $result)==0) {
							echo "<tr>"
								."<td>".($a)."</td>"
								."<td>".ucwords($row['first_name'].' '.$row['last_name'])."</td>"
								."<td>".$row['dob']."</td>"
								."<td>".ucwords($row['current_city'])."</td>"
								."<td>".ucwords($row['education'])."</td>"
								."<td>".ucwords($row['occupation'])."</td>"
								."<td>".$row['mail_id']."</td>"
								."<td>".$row['mobile_number']."</td>"
								."<td>".$row['complexion']."</td>"
								."<td>".$row['hobbies']."</td>"
								."<td>".$row['religion']."</td>"
								."<td>".$row['more_details']."</td>"
							."</tr>";
							$a++;	
						}
				}
				$b=$a;
				$sql=mysql_query("select * from fmmarry where gender='{$sgender}' and education='{$seducation}';") or die($sql."<br/><br/>".mysql_error());
				while ($row=mysql_fetch_assoc($sql)) {
						if (in_array($row['username'], $result)==0) {
							echo "<tr>"
								."<td>".($b)."</td>"
								."<td>".ucwords($row['first_name'].' '.$row['last_name'])."</td>"
								."<td>".$row['dob']."</td>"
								."<td>".ucwords($row['current_city'])."</td>"
								."<td>".ucwords($row['education'])."</td>"
								."<td>".ucwords($row['occupation'])."</td>"
								."<td>".$row['mail_id']."</td>"
								."<td>".$row['mobile_number']."</td>"
								."<td>".$row['complexion']."</td>"
								."<td>".$row['hobbies']."</td>"
								."<td>".$row['religion']."</td>"
								."<td>".$row['more_details']."</td>"
							."</tr>";
							$a++;	
						}
				}
				echo "</table>";

			?>
                
            </div>
            <br>
            <br>
            <a href="profile.php"><div class="button">Back</div></a>
            <br>
            <br>
            <br>
        </div>
    </body>
</html>