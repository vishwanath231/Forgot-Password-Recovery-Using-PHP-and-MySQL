<?php

session_start();
include "../connection/Config.php";


// Register

if (isset($_POST['signUp'])) {
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword =$_POST['cpassword'];
    $code = 0;
    $status = 'Verified';

    if (strlen($password) < 5 || strlen($password) > 15) {
        $_SESSION['msg'] = "<strong>Password</strong> at least 6 characters long";
        header("location:../include/SignUp.php");

    }elseif (!preg_match("/\d/",$password)) {
        $_SESSION['msg'] = "<strong>Password</strong> at least 1 numeric character";
        header("location:../include/SignUp.php");

    }elseif (!preg_match("/\W/", $password)) {
        $_SESSION['msg'] = "<strong>Password</strong> at least 1 special character";
        header("location:../include/SignUp.php");

    }elseif ($password != $cpassword) {
        $_SESSION['msg'] = "<strong>Password</strong> doesn't match";
        header("location:../include/SignUp.php");

    }else {
        $sql = "INSERT INTO info (Name, Email, Password, Code, Status) VALUES ('$name','$email','$password','$code','$status')";

        $query = mysqli_query($con, $sql);
        $_SESSION['successMsg'] = "Registration Successfully";
        header("location:../include/SignUp.php");

    }

}


// Login 

if (isset($_POST['signIn'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM info WHERE Email='$email' AND Password='$password'";
    $query = mysqli_query($con,$sql);
    $count = mysqli_num_rows($query);

    if ($count > 0) {
        $_SESSION['name'] = $email;
        header("location:../include/Home.php");
    }else {
        $_SESSION['msg'] = "Invalid Email or Password";
        header("location:../Index.php");
    }

}


// Email 

if (isset($_POST['checkEmail'])) {

    $email = $_POST['email'];

    $sql = "SELECT * FROM info WHERE Email='$email' ";
    $query = mysqli_query($con, $sql);
    $count = mysqli_num_rows($query);

    if ($count > 0) {

        $code = rand(11111,99999);
        $sql1 = "UPDATE info SET Code='$code' WHERE Email='$email'";
        $query1 = mysqli_query($con,$sql1);

        if ($query1) {
            $subject = "Password Reset Code";
            $message = "Your password reset code is $code";
            $sender = "From:vishwanathvishwabai@gmail.com";

            if (mail($email,$subject,$message,$sender)) {
                $_SESSION['email'] = $email;
                header("location:../include/Code.php");
            }else {
                $_SESSION['msg'] = "Failed while sending code!";
                header("location:../include/Email.php");
            }
            
        }else {
            $_SESSION['msg'] = "Something went wrong!";
            header("location:../include/Email.php");
        }
        
    } else {
        $_SESSION['msg'] = "This email address does not exist!";
        header("location:../include/Email.php");
    }
}



// code verification

if (isset($_POST['verification'])) {

    $code = $_POST['code'];

    $sql = "SELECT * FROM info WHERE Code='$code'";
    $query = mysqli_query($con, $sql);
    $count = mysqli_num_rows($query);

    if ($count > 0) {
        
        header("location:../include/NewPassword.php");
    } else {
        $_SESSION['msg'] = "Invalid Code";
        header("location:../include/Code.php");
    }
}

// new passwword 

if (isset($_POST['change'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $code = 0;

    if (strlen($password) < 5 || strlen($password) > 15) {
        $_SESSION['msg'] = "<strong>Password</strong> at least 6 characters long";
        header("location:../include/NewPassword.php");

    } elseif (!preg_match("/\d/", $password)) {
        $_SESSION['msg'] = "<strong>Password</strong> at least 1 numeric character";
        header("location:../include/NewPassword.php");

    } elseif (!preg_match("/\W/", $password)) {
        $_SESSION['msg'] = "<strong>Password</strong> at least 1 special character";
        header("location:../include/NewPassword.php");

    } elseif ($password != $cpassword) {
        $_SESSION['msg'] = "<strong>Password</strong> doesn't match";
        header("location:../include/NewPassword.php");

    } else {
        $sql = "UPDATE info SET Password ='$password', Code ='$code' WHERE Email = '$email'";

        $query = mysqli_query($con, $sql);
        header("location:../Index.php");
    }
}



?>