<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "netflix";

$con = mysqli_connect($servername,$username,$password,$dbname); 

if($con)
{
    echo " ";
    if (isset($_POST['submit'])) {
        $fname = $_POST['fname'];
        $uname = $_POST['uname'];
        $phone = $_POST['phone'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];
    
    if ($password==$cpassword) {
        $query = "insert into user( fname,uname, phone, gender, email, password, cpassword) values('$fname','$uname','$phone','$gender','$email', '$password', '$cpassword')";
    
        $run = mysqli_query($con,$query) or die(mysqli_error());
    
        if ($run) {
            echo "<script type='text/javascript'>alert('WELCOME MOTHER FUCKER');</script>";
            header('location:http://localhost/neTFLIX%20CLONE/Landing%20page/attachments/profile.html');
        }
        else{
            echo "failed";
        }

    }
    else{
        echo '<script type = "text/javascript">';
        echo '</script>';
        header('location:http://localhost/NETFLIX%20CLONE/Landing%20page/Signup/Sign%20up.html');
    }
    }
}
else
{
    echo "Connection Failed";
}

?>