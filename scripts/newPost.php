

<?php

session_start();

$postText = $_POST['textarea_field'];
$postUser = $_SESSION['profileName'];
$postDate = $_SESSION['currentDate'];
$postAvatar = $_SESSION['avatar'];

//Sanitize user input before sending to database
$postTextFilter = filter_var($postText,FILTER_SANITIZE_STRING);

$postText = $postTextFilter;

include_once 'dbh.php';


    // If you fail to connect, show an error
    if (mysqli_connect_error()){
        die('Connect Error ('. mysqli_connect_errno() .')' . mysqli_connect_error());
    }
    else
    {
        

        $sql = "INSERT INTO posts (postText, postUser, postDate, postAvatar) values ('$postText','$postUser', '$postDate', '$postAvatar')";

        if ($conn->query($sql)){
            echo "Post successful! Please wait while you are redirected to the timeline.";
            echo "<script> window.location.replace('../timeline.php'); </script>";
            exit();
        }
        else{
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();

    }



?>