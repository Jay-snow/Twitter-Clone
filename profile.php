<?php
  //  $database = include('config.php');
  //  echo $database['host']; // localhost
  //Create connection
  //  $link = mysql_

  $title = 'Profile';





  echo $id;
  require 'header.php';
  include_once 'scripts/dbh.php';

?>

  <body>
  <div class="container">

  <div class="vertical-center">
  <section  class="col col-md-6 m-auto ">
    <!-- Login Form -->





    <section class="nes-container with-title">
    <?php
    
    $profileid = htmlspecialchars($_GET['pid']);
    $sql = "SELECT * FROM users WHERE pid = $profileid";

    $result = mysqli_query($conn,$sql);

    while ( $row = mysqli_fetch_array($result)  ) {

      echo '<p class="title">', $row['username'],  '</p>';
      echo '<p> Username:', $row['username'] , '</p> ';
      echo '<p>Avatar: </p>',  '<i class=', $row['avatar'] ,' text-center m-3></i>';


      /* Show permissions to change only if user is logged in to that account */
      if ($_SESSION['pid'] == $row['pid']) {
        echo 
        '<p class="bg-light">  </p>',
  
        '<div class="nes-field" >',
        '<label for="name_field">Flavor Text</label>',
  
        
  
  
        '<form name="profileFlavorText" method="POST" action="scripts/updateProfile.php">',
        '<input name="name_field" value="', $row['fname'], '" type="text" id="name_field" class="nes-input">', '</div>';

        echo 'Posts: ';
        /* PHP sees null and 0 as the same, so need to print out a string 0 in case of no posts */
        if ($row['postCount'] == 0 ) {
          echo "0";
        } else {
        echo $row['postCount']; 
        }
        echo
        '<p> <button type="submit" class="nes-btn is-error">Save Changes</button> </p> </form>';

      } else {
        echo
        '<p class="bg-light">  </p>',
  
        '<div class="nes-field" >',
        '<label for="name_field">Flavor Text</label>',
  
        
  
  
        '<form name="profileFlavorText" method="POST" action="scripts/updateProfile.php">',
        '<div name="name_field" ', '" id="name_field" class="nes-input"> <em>"', $row['fname'], '" </em></div> </div>';

        echo 'Posts: ';
        /* PHP sees null and 0 as the same, so need to print out a string 0 in case of no posts */
        if ($row['postCount'] == 0 ) {
          echo "0";
        } else {
        echo $row['postCount']; 
        }


      }



    

      
      

    }


    ?>

             </p> 

            <button>  <a href= "./timeline.php"> Take me back captain! </a> </button>
          </section>  
    
  </section>
  </div>


  </div>
  </body>
</html>

<?php


?>