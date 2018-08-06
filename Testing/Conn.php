<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//echo 'Started';
//$servername = "192.168.1.12";  //  or  $servername = "localhost:3306"
      $servername = "localhost:3306";
       
//$username = "root";
$username = "Mac";
//$password = "mylockerpass";
$password = "Programmer";
//$dbname = "starting";         // lockerdata
$dbname = "lockerdata";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} Else {
}



?>

