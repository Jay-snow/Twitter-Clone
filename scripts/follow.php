<?php


include 'dbh.php';

$followerID = htmlspecialchars($_GET['pid']);


$sql = "INSERT INTO users (followerList, ) values ('$followerID')";


echo "Follower followed.";

?>