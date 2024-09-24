<?php
include 'DbConnect.php';
session_start();


if(isset($_POST['username'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $email=$_SESSION['email'];
    
    if(empty($username)){
        header("Location:register.php?error=User Name is required");
    }
    else{
        $sql="INSERT INTO `users`( `username`,`email`, `password`) VALUES ('$username','$email','$password')";
        $result=mysqli_query($con,$sql);
        if($result){
            $sql="SELECT * FROM users WHERE email='$email'";
            $result1=mysqli_query($con,$sql);
            $user=mysqli_fetch_assoc($result1);
            $_SESSION['id']=$user['id'];
            header("Location:event.php");
        }
    } 
}
else{
    if(isset($_POST['first_name'])){
        $first_name=$_POST['first_name'];
        $last_name=$_POST['last_name'];
        $event_date=$_POST['event_date'];
        $pricing_plan=$_POST['pricing_plan'];
        $number=$_POST['number'];
        $user_id=$_SESSION['id'];

        $sql="SELECT * FROM event_register WHERE event_date='$event_date'";
        $result1=mysqli_query($con,$sql);
        if(mysqli_num_rows($result1)){ 
            header("Location:event.php?error=Event Date is already register , Please try another date");
        }
        else{
            $sql="INSERT INTO `event_register`( `user_id`, `first_name`, `last_name`, `phone_number`, `event_date`, `pricing_plan`) 
            VALUES ('$user_id','$first_name','$last_name','$number','$event_date','$pricing_plan')";
            $result=mysqli_query($con,$sql);
            if($result){
                header("Location:event.php?success=Event is register successfully");
            }
        }
        
    }
}

?>