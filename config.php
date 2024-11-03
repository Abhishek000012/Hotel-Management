<!-- ?php

// $server = "localhost";
// $username = "bluebird_user";
// $password = "password";
// $database = "bluebirdhotel";

// $conn = mysqli_connect($server,$username,$password,$database);

// if(!$conn){
    // die("<script>alert('connection Failed.')</script>");
// }
// else{
//     echo "<script>alert('connection successfully.')</script>";
// } -->



<?php

// Replace 'your-rds-endpoint.amazonaws.com' with your actual RDS endpoint
$server = "bluebirdhotel.c7g2wm60cwun.ap-south-1.rds.amazonaws.com"; // RDS endpoint here
$username = "root";                 // RDS database username
$password = "Abhishek$12345";                      // RDS database password
$database = "bluebirdhotel";                 // RDS database name

$conn = mysqli_connect($server, $username, $password, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
} 
 else {
     echo "<script>alert('Connection successful.')</script>";
}
?>
