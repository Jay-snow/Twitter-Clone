

<?php

session_start();

$postText = $_POST['textarea_field'];
$postUser = $_SESSION['profileName'];
$postDate = $_SESSION['currentDate'];

include_once 'dbh.php';


    // If you fail to connect, show an error
    if (mysqli_connect_error()){
        die('Connect Error ('. mysqli_connect_errno() .')' . mysqli_connect_error());
    }
    else
    {
        $sql = "INSERT INTO posts (postText, postUser, postDate) values ('$postText','$postUser', '$postDate')";
        if ($conn->query($sql)){
            echo "Post data has been saved.";
            
            header("Location: ../timeline.php");
        }
        else{
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();

    }

    var_dump($postUser);
    var_dump($postText);
    echo date("y-m-d");

?>