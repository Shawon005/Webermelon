<?php 

//Class DbConnect
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'job_task');
//Variable to store database link

//connecting to mysql database
$con = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

//Checking if any error occured while connecting
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
if(!$con){
    echo "connection faild";
}
//finally returning the connection link 

 ?>   

