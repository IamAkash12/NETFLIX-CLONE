<?php

    
if(isset($_POST['submit']))
{
    session_start();
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "netflix";

    $con = mysqli_connect($servername,$username,$password,$dbname); 
    
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $email=$_POST['email'];
        $password=$_POST['password'];
        $_SESSION['u_id']=$email;
        $result=mysqli_query($con,"SELECT email,password FROM user where email='$email' and password='$password' ");
       
          
   
        
        if(!$result || mysqli_num_rows($result)==0)
        {
          $message = "Id or Password not Matched.";
         
          header('location:http://localhost/NETFLIX%20CLONE/Landing%20page/Login%20Page/');
          echo "<script type='text/javascript'>alert('$message');</script>";
        }
        else 
        {
          header("location:http://localhost/neTFLIX%20CLONE/Landing%20page/attachments/profile.html");
          
        }

    }                
}
?>