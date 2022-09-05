
	
<?php 
session_start();
$timezone=date_default_timezone_set("Asia/Kolkata");
$con=mysqli_connect("localhost","root","","login");
if (mysqli_connect_errno())
 {
       echo "failed to connect:".mysqli_connect_errno();
}
else
echo '<font color="white">'.'You are now connected to Database'.'</font>';
 ?>

