<?php 

require_once("connect.php");
$u=$_POST['uname'];
$p =$_POST['pass'];
$q=mysqli_query($con,"SELECT * FROM `clientaccount` WHERE Username='$u' AND Password = '$p'" );
if(mysqli_num_rows($q)){
  header('location:clientinfo.html');  
}else
{
 header('location:loginfailed.html');  
}
?>