<?php
session_start();
require "./dbh.php";

$ftextSession = $_SESSION["ftext"];
$profileChangeText = $_POST['name_field'];


//Write the SQL and connect to the database.
 $sql = "SELECT * FROM users WHERE username = 'jarule'";
 $result = mysqli_query($conn,$sql);
 $row = mysqli_fetch_array($result);

 //Look through the database find the matching flavor text. 
    if ($row['fname'] == $_SESSION["ftext"]) {
            $sql2 = "UPDATE users set fname = '$profileChangeText' WHERE fname = '$ftextSession' ";
            mysqli_query($conn,$sql2);
            $_SESSION["ftext"] = $profileChangeText;
            
    }
    header("Location: ../profile.php");
?>