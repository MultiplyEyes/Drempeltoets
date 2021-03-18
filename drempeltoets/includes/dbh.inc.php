<?php
// MSQLI database connnectie voor inloggen
$severName = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "ter duin";

$conn = mysqli_connect($severName, $dBUsername, $dBPassword, $dBName);

if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}