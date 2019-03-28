<?php
  //  $database = include('config.php');
  //  echo $database['host']; // localhost
  //Create connection
  //  $link = mysql_



  $title = 'OctoBit Home';
  require 'header.php';

//Check to see if user is logged in. If they are, redirect them to the timeline.
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true)
{
  header("Location: timeline.php");
 
} else {
  
}


?>
  <body >
  <div class="container-fluid">
  <div class="row">
  <div class="col-12">
<!-- <h1> OctoBit </h1>  <i class="nes-mario m-4"></i> -->
  </div>
  

  <section class="col col-md-5">

  <div class="nes-container is-dark with-title">
  <p class="title">Welcome to Octo Bit!</p>
  <i class="nes-kirby d-block"></i>
  <p>OctoBit is an 8-bit social media platform, inspired by Twitter. </p> <p> There's no e-mail or validation needed - just create an account and get started! </p>
  <p>The amazing CSS framework was created by <a href="https://nostalgic-css.github.io/NES.css/">B.C.Rikko, creator of NES.CSS</a>. </p>
  <p> This website was created just for fun to teach myself PHP and mySQL. </p>
</div>


  </section>

  <section  class="col col-md-5 ">
    <!-- Login Form -->
    <form  action="scripts/signin.php" class="form-signin p-3" method="POST">
      
      <h1 class="h3 mb-3 font-weight-normal"># Login</h1>
      
      <!-- Username -->
      <label for="inputEmail" class="sr-only">Username</label>
      <input name="username" id="inputEmail" class="form-control" placeholder="Username"  autofocus>

      <!--Password -->
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" >


      <!-- Buttons -->
      <button class="nes-btn is-primary mt-3" name="submit" type="submit">Log in</button>
      <a class="nes-btn is-warning mt-3" href="create-account.php" >Create New Account</a>

      <!-- Credits -->
      <!-- <p class="mt-5 mb-3 text-muted">Created by Marcus Snow</p>
      <small>
      <p class="mt-5 mb-3 text-muted">Special Thanks:</p>
        <ul>
            <li> <a href="https://nostalgic-css.github.io/NES.css/">B.C.Rikko, creator of NES.CSS</a>, and all the contributors!</li>
            <li> All the stackedoverflow posts </li>

        </ul>
      </small> -->
    </form>
  </section>
  

  </div>
  </div>
  </body>
</html>
