<?php
$postCheck = $_SESSION['profileName'];
session_start();

include_once 'dbh.php';
echo "Hello";

    // If you fail to connect, show an error
    if (mysqli_connect_error()){
        die('Connect Error ('. mysqli_connect_errno() .')' . mysqli_connect_error());
    }
    else
    {
        


        $sql = "SELECT * FROM posts WHERE postUser =  '$postCheck'";
        $result = mysqli_query($conn,$sql);
        
        //Not sure what this while loop does, if anything.
        
        /*while ($row = mysqli_fetch_array($result)){
            $counter += 1;
            

        } */
        //Debugging for checking the poster and post count.
       // $_SESSION['postCount'] = $counter;
     //   echo $counter;
     //   echo $postCheck;
        
      
    }

?>