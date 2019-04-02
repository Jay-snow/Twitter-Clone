<?php
session_start();
require "./dbh.php";

$username = $_SESSION["profileName"];



 //If successfully connected, do a thing
 $sql = "SELECT * FROM users WHERE username = 'jarule'";
 
 $result = mysqli_query($conn,$sql);
 $row = mysqli_fetch_array($result);

    if ($row['fname'] == $_SESSION["ftext"]) {
           $_SESSION["profileName"] = $username;
            $_SESSION["avatar"] = $row['avatar'];
            $row['fname'] = "H1ello";
            $_SESSION["ftext"] = $row['fname'];
            $_SESSION["postCount"] = $row['postCount'];
        echo "I see you....";
    }

echo "Hello"
?>