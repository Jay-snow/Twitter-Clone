<?php

if (isset($_POST['submit']))
{

  include_once 'dbh.php';
  $username = filter_input(INPUT_POST, 'username');
$password = filter_input(INPUT_POST, 'password');

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
        $row = mysqli_fetch_array($result);

        // If the query returns null
        if (is_null($row)) {
          echo "An error has occured. You were not found in the database";
          header("Location: index.php?login=error");
          exit();
        } else {
           //echo $row;
        //var_dump($row);

        $_SESSION["username"] = $username;
        $_SESSION["loggedin"] = true;
         

        echo "Welcome! " , $_SESSION['username'];
        header("Location: ../timeline.php");
        var_dump($_SESSION);

        }

       

        if ($conn->query($sql)){
          //  echo "successful connection";
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

}
?>