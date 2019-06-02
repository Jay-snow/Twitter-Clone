<?php


include 'dbh.php';

$followerID = htmlspecialchars($_GET['pid']);

var_dump($_GET);
$yourID = $_SESSION['pid'];

$sql = "UPDATE users SET followerList = '$followerID' WHERE $followerID = $yourID";
mysqli_query($conn, $sql);

echo "Follower followed.";

?>