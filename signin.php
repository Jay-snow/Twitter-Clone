<?php

include_once 'dbh.php';


$username = mysqli_real_escape_string($conn, 'username');
$password = mysqli_real_escape_string($conn, 'password');



if (!empty($username)) {
  if (!empty($password)) {


    
    
    // If you fail to connect, show an error
    if (mysqli_connect_error()){
        die('Connect Error ('. mysqli_connect_errno() .')' . mysqli_connect_error());
    }
    else
    {
        //If successfully connected, do a thing

        $sql = "SELECT username FROM users WHERE username = '$username'";

        $result = mysqli_query($conn,$sql);
        

        echo $result;


        if ($conn->query($sql)){
            echo "New user has been created.";
        }
        else{
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();

    }


  }
  else {
    echo "Password should not be empty";
    die();
  }
} 
else {
  echo "Username should not be empty";
  die();
}

?>