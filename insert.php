<?php

$name=$_POST['name'];
$roll=$_POST['enroll'];
$mob=$_POST['mob'];
$sem=$_POST['sem'];
// $pic_name=$_POST['fileToUpload'];

$connection=mysqli_connect("localhost","root","","login");

$result=mysqli_query($connection,"INSERT INTO user3 (name,enroll,mob,sem)
VALUES ('$name','$roll',$mob,$sem)") or die ("failed".mysqli_error());
// if ($username =='' or $password=='') {
//     echo "mendatory fields";
// }
// {
// 	else
    
echo "<script type='text/javascript'>alert('data saved SUCCESSFULLY!')</script>" ;

// echo "<script type='text/javascript'>alert('NOW YOU CAN LOGIN WITH NEW USERNAME AND PASSWORD')</script>";
 echo "<script>window.open('/datainsert','_self')</script>";

?>