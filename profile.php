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

    <section class="nes-container with-title">
            <p class="title"> Profile </p>
            <p> Username: <?php echo $_SESSION['profileName'] ?>  <span> [EDIT] </span></p> 
            <?php echo '<i class=', $_SESSION['avatar'] ,' mb-3></i>' ?>
            <p> Flavor Text: Literally #1 </p>
            <p> Posts: 0  </p>

            <button onclick="javascript:window.history.back();"> Take me back captain! </button>
          </section>  
    
  </section>
  </div>


  </div>
  </body>
</html>
