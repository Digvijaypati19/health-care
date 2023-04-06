<?php
require_once('confighealth.php');
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $a=$_POST['h_name'];
    $b=$_POST['h_phone'];
    $c=$_POST['h_gender'];
    $mypassword=$_POST['h_pin'];
    $password=md5($mypassword);
     
    

  echo $qry=mysqli_query($con,"INSERT INTO hlogin(h_name,h_phone,h_gender,h_pin)  VALUE ('$a','$b','$c','$password')");

  if($qry ==true)
    {
        echo"<center>"."  inserted"."</center>";
    
        header("location:hlogin.php");
            
        

    }
    else{
        echo"not".mysqli_error($con);
    }
   
}
else{
    echo"request method is not POST";
}
?>