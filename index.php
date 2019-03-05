<?php
  //  $database = include('config.php');
  //  echo $database['host']; // localhost
  //Create connection
  //  $link = mysql_









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

          

        echo "Welcome! " , $_POST['username'];

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

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">
    <!-- latest -->


    <title>Login Page</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="https://unpkg.com/nes.css@latest/css/nes.min.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Press+Start+2P" rel="stylesheet">

    <style>
    font-family:  { 'Press Start 2P', cursive;   }

    .vertical-center {
  min-height: 100%;  /* Fallback for browsers do NOT support vh unit */
  min-height: 100vh; /* These two lines are counted as one :-)       */

  display: flex;
  align-items: center;
    }


     </style>
  </head>

  <body class="text-center">
  <div class="container">

  <div class="vertical-center">
  <section  class="col col-md-6 m-auto ">
    <!-- Login Form -->
    <form  class="form-signin" method="post">
       <i class="nes-mario m-4"></i>
      <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
      
      <!-- Username -->
      <label for="inputEmail" class="sr-only">Email address</label>
      <input name="username" id="inputEmail" class="form-control" placeholder="Email address"  autofocus>

      <!--Password -->
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" >
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
      <button class="nes-btn is-primary" name="submit" type="submit">Sign in</button>
      <a class="nes-btn is-warning" href="create-account.php" >Create New Account</a>
      <br>
      <a class="nes-btn is-success mt-2 mb-2" href="timeline.php" >I'm already logged in!</a>
      <p class="mt-5 mb-3 text-muted">Created by Marcus Snow</p>
      <small>
      <p class="mt-5 mb-3 text-muted">Special Thanks:</p>
        <ul>
            <li> <a href="https://nostalgic-css.github.io/NES.css/">B.C.Rikko, creator of NES.CSS</a>, and all the contributors!</li>
            <li> All the stackedoverflow posts </li>

        </ul>
      </small>
    </form>
  </section>
  </div>


  </div>
  </body>
</html>
