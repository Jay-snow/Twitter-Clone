<?php
session_start();

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
        $sql = "SELECT * FROM users WHERE username = '$username'";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_array($result);
      //  $passwordHash = password_hash('password', PASSWORD_DEFAULT);

        //  var_dump($row['username']);
        //  var_dump($row['password']);
        //  echo $password;


          
        // If the query returns null
        if (isset($row['username'])  ) {
          
           $passwordHash = $row['password'];
          if ( password_verify($_POST['password'], $passwordHash) ) {

            

            $_SESSION["profileName"] = $username;
            $_SESSION["avatar"] = $row['avatar'];
            $_SESSION["ftext"] = $row['fname'];
            $_SESSION["postCount"] = $row['postCount'];
            global $username;
          $_SESSION["loggedin"] = true;
          

          echo "Welcome! " , $_SESSION['profileName'];
          echo "<script> window.location.replace('../timeline.php') </script>";

           
          } else {
            $_SESSION['passFail'] = true;
            $passFail = $_SESSION['passFail'];
            global $passFail;
            
            echo "<script> window.location.replace('../index.php?LoginError') </script>";
            
          }


        } else {
           //echo $row;
        //var_dump($row);

          
          echo "<script> alert('An error has occured. You were not found in the database'); window.location.replace('../index.php?LoginError')</script>";

        }

       //Debugging code, might remove soon.
        /*
        if ($conn->query($sql)){
          //  echo "successful connection";
        }
        else{
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();
        */
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