
<?php

$username = filter_input(INPUT_POST, 'username');
$password = filter_input(INPUT_POST, 'password');
$fname = $_POST['fname'];
$avatar = $_POST['avatar'];

include_once 'dbh.php';

if (!empty($username)) {
  if (!empty($password)) {


    
    
    // If you fail to connect, show an error
    if (mysqli_connect_error()){
        die('Connect Error ('. mysqli_connect_errno() .')' . mysqli_connect_error());
    }
    else
    {

      $passwordHash = password_hash($_POST["password"], PASSWORD_DEFAULT);


        $sql = "INSERT INTO users (username, password, fname, avatar) values ('$username','$passwordHash', '$fname', '$avatar')";
        if ($conn->query($sql)){
          //  echo "New user has been created.";
          echo "<script> setTimeout(function() {window.location.replace('http://marcussnow.dev/twitter-clone/timeline.php')}, 5000) </script>";
          header("refresh:5; url= ../index.php");

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

   <!-- Custom styles for this template -->
   <link href="../css/nes.min.css" rel="stylesheet" />
  <link href="../css/press-start-font.css" rel="stylesheet">
  <link href="../css/styles.css" rel="stylesheet">
  <link href="../css/bootstrap.min.css" rel="stylesheet">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="The 8-bit social media platform nobody asked for!">
    <meta name="author" content="Marcus Snow">
    <link rel="icon" href="../../../../favicon.ico">
    <!-- latest -->


    <title>Login Page</title>

    <!-- Bootstrap core CSS -->
    




  </head>

  <body class="text-center vertical-center">
  <div class="container">

  <div >
  <section  class="col col-md-6 m-auto text-center ">
   <h1> Username created!  </h1>
   <p> Hi <?php echo $_POST["username"]; ?>! Welcome to OctoBit! </p>
   <small> <a href="../index.php"> You will be redirected in 5 seconds. Or you can click here </a> </small>
   
  </section>
  </div>


  </div>
  </body>
</html>

