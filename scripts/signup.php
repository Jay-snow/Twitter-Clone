<?php

session_start();


$username = filter_input(INPUT_POST, 'username');
$password = filter_input(INPUT_POST, 'password');
$fname = filter_input(INPUT_POST, 'fname');
$fnameFilter = filter_var($fname,FILTER_SANITIZE_STRING);
$fname = $fnameFilter;
$avatar = $_POST['avatar'];

include_once 'dbh.php';

if (!empty($username)) {
  if (!empty($password)) {


    //Check if the username exists in the database.

      //If successfully connected, do a thing
      $sql = "SELECT * FROM users WHERE username = '$username'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result);

        
      // If the query returns null
      if (isset($row['username'])  ) {
        header("Location: ../create-account.php?UserExist");
        $_SESSION["loggedin"] = false;
        exit();

      }

    
    // If you fail to connect, show an error
    if (mysqli_connect_error()){
        die('Connect Error ('. mysqli_connect_errno() .')' . mysqli_connect_error());
    }
    else
    {

      $passwordHash = password_hash($_POST["password"], PASSWORD_DEFAULT);


      

        $sql = "INSERT INTO users (username, password, fname, avatar, postCount) values ('$username','$passwordHash', '$fname', '$avatar', 0)";

        if ($conn->query($sql)){
          //Create sessions needed at login.
          $_SESSION["profileName"] = $username;
          $_SESSION["avatar"] = $avatar;
          $_SESSION["ftext"] = $fname;
 
          $_SESSION["postCount"] = 0;
          $_SESSION["loggedin"] = true;

          //Wait 5 seconds, redirect to
          header("Refresh:5;  url=../index.php");


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


<html lang="en">
  <head>

  
    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/nes.min.css" rel="stylesheet" />
  <link href="../css/press-start-font.css" rel="stylesheet">
  <link href="../css/styles.css" rel="stylesheet">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="The 8-bit social media platform nobody asked for!">
    <meta name="author" content="Marcus Snow">
    <link rel="icon" href="../../../../favicon.ico">
    <!-- latest -->


    <title>Account Created</title>

    <!-- Bootstrap core CSS -->
    




  </head>

  <body class="text-center vertical-center">
  <div class="container">

  <div >
  <section  class="col col-md-6 m-auto text-center ">
    <p>   <i class="nes-icon is-large like"></i> </p>
   <h1> Username created!  </h1>
   <p> Hi <?php echo $_POST["username"]; ?>! Welcome to PokéTweet! </p>
   <small> <a href="../index.php"> You will be redirected in 5 seconds. Or you can click here </a> </small>
   
  </section>
  </div>


  </div>
  </body>
</html>

