<?php
  //  $database = include('config.php');
  //  echo $database['host']; // localhost
  //Create connection
  //  $link = mysql_

  $title = 'Your Title';
  require 'header.php';

?>

  <body class="text-center">
  <div class="container">

  <div class="vertical-center">
  <section  class="col col-md-6 m-auto ">
    <!-- Login Form -->
    <form  action="scripts/signin.php" class="form-signin" method="post">
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

      <!-- Buttons -->
      <button class="nes-btn is-primary" name="submit" type="submit">Sign in</button>
      <a class="nes-btn is-warning" href="create-account.php" >Create New Account</a>

      <!-- Credits -->
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
