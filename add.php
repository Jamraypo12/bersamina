<?php
require_once("connect.php");
$i=$_POST['id'];
    $l=$_POST['lname'];
$f=$_POST['fname'];
$m=$_POST['mname'];
$ph=$_POST['phone'];
$e=$_POST['email'];
$u=$_POST['uname'];
$p=$_POST['pass'];
mysqli_query($con,"INSERT INTO `clientaccount`(`Lastname`, `Firstname`, `Middlename`, `Phone`, `Email`, `Username`, `Password`) VALUES ('$l','$f','$m','$ph','$e','$u','$p')");
header('location:login.html');  

?>
