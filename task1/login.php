<?php
include 'DbConnect.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';
session_start();
function send_mail($email,$otp){
    $mail = new PHPMailer(true);

    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;  
    $mail->isSMTP();
    $mail->SMTPAuth   = true; 
    $mail->Host       = 'smtp.gmail.com';
    $mail->Username   = 'shawonomar07@gmail.com';
    $mail->Password   = 'rrui wdpl gwek elsf ';

    $mail->SMTPSecure = 'tls';
    $mail->Port       = 587;   

    $mail->setFrom('shawonomar07@gmail.com');
    $mail->addAddress($email);  
    
    $mail->isHTML(true);
    $mail->Subject = 'Email Verifaction';
    $email_tamp="
        <h3>Your Register With Your Email</h3>
        <h3>verify your email address</h3>
        <h2>Verification Code : $otp</h2>";

    $mail->Body    = $email_tamp;
    $mail->send();
    echo 'Message has been sent';
 }

if(isset($_POST['email'])){
    $email= $_POST['email'];
    $_SESSION['email']=$email;

    if(empty($email)){
        header("Location:index.php?error=Email is required");
    }
    else{
        $otp=rand(11111,999999);
        $time = (new \DateTime())->format( 'Y-m-d H:i' );

        $sql="SELECT * FROM otp_store WHERE email='$email'";
        $result=mysqli_query($con,$sql);       
        
        if(mysqli_num_rows($result)){
            $sql="UPDATE otp_store SET otp='$otp' WHERE email='$email'";
            $result=mysqli_query($con,$sql);
            if($result){
            
            send_mail("$email","$otp");
            header("Location:varification.php");
        }
        }else{
            $sql="INSERT INTO `otp_store`( `email`,`otp`, `expiration_time`) VALUES ('$email','$otp','$time')";
            $result=mysqli_query($con,$sql);
            if($result){
                send_mail("$email","$otp");
                header("Location:varification.php");
            }
        } 
    }
    }
    else{
        if(isset($_POST['verification'])){
            $email=$_SESSION['email'];
            $otp=$_POST['verification'];
            $sql="SELECT * FROM otp_store WHERE otp='$otp'";
            $result=mysqli_query($con,$sql);       
            if(mysqli_num_rows($result)){
                $sql1="SELECT * FROM users WHERE email='$email'";
                $result1=mysqli_query($con,$sql1);
                if(mysqli_num_rows($result1)){
                    echo "event.php";
                }
                else{
                   
                    echo "register.php";
                }
            }
            else{
                $N_otp=rand(11111,999999);
                send_mail("$email","$N_otp");
                echo "varification.php?error=Verification Code is Inncorrect; Try New Code";
            }
        }
        else{
            header("Location:index.php?error=Email is required");
            exit();
        }
    
}





?>