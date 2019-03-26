

<?php


$postText = $_POST['textarea_field'];
$postUser = $_SESSION['profileName'];
$postDate = $_SESSION['currentDate'];
$postAvatar = $_SESSION['avatar'];

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
            echo "Post data has been saved.";
            echo "<script> window.location.replace('/twitter-clone/timeline.php'); </script>";
            exit();
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