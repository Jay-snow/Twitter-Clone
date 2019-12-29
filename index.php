<?php
  //  $database = include('config.php');
  //  echo $database['host']; // localhost
  //Create connection
  //  $link = mysql_



  $title = 'PokeTweet Home';
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
  <div class="col-12 mt-4">
<!-- <h1> OctoBit </h1>  <i class="nes-mario m-4"></i> -->
  </div>
  

  <section class="col col-md-5">

  <div class="nes-container is-dark with-title">
  <p class="title">Welcome to Poké-a-Tweet!</p>
  <section class="message-list">
  <section class="message -left">
  <i class="nes-pokeball d-block"></i>
    <!-- Balloon -->
    <div class="nes-balloon from-left">
      <p style="font-size:150%;"class="text-dark ">I choose you!</p>
    </div>
  </section>
  <p class="mt-3"> Welcome to PokéTweet! </p>
  <p>PokéTweet is an 8-bit social media platform, inspired by Twitter. </p> <p> There's no e-mail or validation needed - just create an account and get started! </p>
  
  <p>
  
  <small> Website coded by <a href="https://www.marcussnow.dev" target="_blank">Marcus Snow</a>. </small>
</div>


  </section>

  <section  class="col col-md-5 ">
    <!-- Login Form -->
    <form  action="scripts/signin.php" class="form-signin p-3" method="POST">
      
      <h1 class="h3 mb-3 font-weight-normal"># Login</h1>
      
      <!-- Username -->
      <label for="inputEmail" class="sr-only"  >Username</label>
      <input name="username" id="inputEmail" class="form-control" required placeholder="Username"  autofocus>

      <!--Password -->
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" name="password" id="inputPassword" required class="form-control" placeholder="Password" >


      <!-- Buttons -->
      <button class="nes-btn is-primary mt-3" name="submit" type="submit">Log in</button>

      <h4 class="mt-5"> First time here? </h4>
      <p> Getting started is easy! Create a new account and begin posting immediately - no e-mail or validation needed.  </p>
      <a class="nes-btn is-warning mt-3" href="/create-account.php" >Create New Account</a>

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
  
  <div class="col-9 mx-auto mt-5 mb-2">
  <small class="text-secondary" style="font-size:0.75em;">Disclaimer: PokéTweet is a fan-created website. Pokémon (Pocket Monsters) is © 1995-2019 Nintendo
     / Creatures Inc. / GAME FREAK, Inc. / Pokémon. No infringement of copyrights is meant by the creation of this website. </small>
</div>
  </div>
  </div>


  
  </body>
</html>
