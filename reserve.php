<?php
require_once("connect.php");

$a=$_POST['a1'];
$k=$_POST['k1'];
$d=$_POST['dtbr'];
$v=$_POST['v1'];
$t=$_POST['t1'];
$c=$_POST['c1'];
$sf1=$_POST['s1'];
$cottage=$_POST['dd'];


mysqli_query($con,"INSERT INTO `serviceinfo`(`Kids`, `Adult`,`Tables`,`Chairs`,`Videoke`,`Shift`,`ReserveDate`,`Cottage`) VALUES ('$k','$a','$t','$c','$v','$sf1','$d','$cottage')");

 

header('location:payment.html'); 
?>
