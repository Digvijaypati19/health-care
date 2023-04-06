<?php
session_start();

require_once("confighealth.php");
if(isset($_SEESION['check']))
{
    header("location:hlogin.php");
}
  if(isset($_POST['btn-signup']))
{
 
 $myusername=$_POST['h_name'];
  $mypassword=$_POST['h_pin'];
  $password=md5($mypassword);
 $sql="SELECT * FROM hlogin WHERE  h_name='$myusername' AND h_pin='$password'";
 $result=mysqli_query($con,$sql);
 $row=mysqli_fetch_array($result);
 $id=$row['h_id'];
 $status=$row['h_flag'];
 
  $count=mysqli_num_rows($result);
 if($count==1 && $status==0)
 {
$_SESSION['login_user']=$myusername;
header("location:homehealth.php");
 }
else
{
 echo"your login or password is invalid";
 } 
}
?>