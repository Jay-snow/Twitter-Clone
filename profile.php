<?php
  //  $database = include('config.php');
  //  echo $database['host']; // localhost
  //Create connection
  //  $link = mysql_

  $title = 'Profile';
  require 'header.php';
?>

  <body>
  <div class="container">

  <div class="vertical-center">
  <section  class="col col-md-6 m-auto ">
    <!-- Login Form -->

    <section class="nes-container with-title">
            <p class="title"> <?php echo $_SESSION['profileName'] ?> </p>
            <p> Username: <?php echo $_SESSION['profileName'] ?> </p> 
            <p>Avatar: </p>
            <?php echo '<i class=', $_SESSION['avatar'] ,' text-center m-3></i>' ?>
            <p class="bg-light">  </p>

            <div class="nes-field" >
            <label for="name_field">Flavor Text</label>
            <form name="profileFlavorText" method="POST" action="scripts/updateProfile.php">
              <?php echo '<input name="name_field" value="', $_SESSION['ftext'], '" type="text" id="name_field" class="nes-input">'; ?>   
            </div>
              
              <p>Posts: <?php 
                    if ($_SESSION['postCount'] == 0 ) {
                      echo "0";
                    } else {
                    echo $_SESSION['postCount']; 
                    }
              ?>
             </p> 
              <p> <button type="submit" class="nes-btn is-error">Save Changes</button> </p>
            </form>
            <button>  <a href= "./timeline.php"> Take me back captain! </a> </button>
          </section>  
    
  </section>
  </div>


  </div>
  </body>
</html>

<?php


?>