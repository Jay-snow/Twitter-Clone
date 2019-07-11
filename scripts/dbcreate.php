<?php

/* Resets the database */

if (mysqli_connect_errno() ) {

    die( "Connection error");

} else {


$dbCreate = 'poketweet';
$link = mysqli_connect('localhost','root','');

//Check to see if database exists. If not, create it
$sql = "SHOW DATABASES LIKE '$dbCreate' ";
$result = mysqli_query($link,$sql);
$row = mysqli_fetch_array($result);

if (isset($row)) {

    echo 'Database has already been created';
} else {
    $sql = "CREATE DATABASE $dbCreate ";
    echo' Database has been successfully created.';
    echo '';

    mysqli_query($link,$sql);
    $sql = "CREATE TABLE $dbCreate.users (
        pid int NOT NULL AUTO_INCREMENT,
        fname varchar(500),
        username varchar(64),
        password varchar(255),
        secretHash varchar(255),
        avatar varchar(32),
        postCount varchar(100),
        followerList varchar(64),
        PRIMARY KEY (pid)
    )";
    mysqli_query($link,$sql);
    $sql = "CREATE TABLE $dbCreate.posts (
        postText varchar(160),
        postUser varchar(50),
        postDate varchar(20),
        postID int NOT NULL AUTO_INCREMENT,
        postAvatar varchar(32),
        postCount int,
        postPid int,
        PRIMARY KEY (postID)

    )";

    mysqli_query($link,$sql);
     


  echo 'User table and Post table have been created.';
}

}

?>