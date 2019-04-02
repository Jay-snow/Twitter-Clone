<?php
  $title = 'Your Timeline';
  require 'header.php';
  
   
  $_SESSION['currentDate'] = date('d-M');

  include_once 'scripts/dbh.php';
  include 'scripts/addPosts.php';

?>



  <body id="bodyTest" class="text-center">

  <!-- Top Navbar -->
  <div class="border" >
  <div class="container-fluid ">
    <div class="d-flex flex-column flex-md-row align-items-center p-1   bg-white ">
      <small class="my-0 ml-0 font-weight-normal"><a class="text-dark" href="#" >Home</a> </small>
      <small class="p-2 ">     <a class="text-dark"  href="#">  Notifications</a></small>
      <small class="p-2 text-dark mr-md-auto"> <a class="text-dark"  href="#">Messages</a></small>
      <i class="nes-logo is-large mr-md-auto"></i>
        <nav class="my-2 my-md-0 mr-md-3">       
          <a class="nes-btn is-warning" id="logout" href="#">Log Out</a>          
          <button type="button" class="nes-btn is-primary" data-toggle="modal" data-target="#writePost" href="#">Write Post</button>
        </nav>
      </div>
    </div>
  </div>

  <div class="container-fluid">
    <div class="row">

      <!-- User Profile -->
      <div  class="col-12 col-md-3 border">
            <section class="nes-container with-title">
            <p class="title"> <a href="./profile.php"> <?php echo $_SESSION['profileName'] ?></a> </p>
            
            <?php echo '<i class=', $_SESSION['avatar'] ,' mb-3></i>' ?>
            <p> <?php echo $_SESSION['ftext']; ?> </p> 
            <p>Posts: <?php echo $_SESSION['postCount']; ?> </p> 
            <p> Likes: 0 </p>
           <?php  echo date('d-M'); ?>

          </section>    
    </div>

      <!-- Timeline -->
        <section  class="col-12 col-md-6 border">
            
            <section class="nes-container with-title">
                <h3 class="title">Timeline </h3>

                <section id="message-list" class="message-list">

                  <?php


                     if (mysqli_connect_error()){
    die('Connect Error ('. mysqli_connect_errno() .')' . mysqli_connect_error());
    }
    else
    {


    $sql = "SELECT * FROM posts ORDER BY postID DESC"; 
    $result = mysqli_query($conn,$sql);

    while ($row = mysqli_fetch_array($result))
    {


      if ( $row['postID'] % 2 == 0 ) {

        
      echo '<section class="message -left">',
     
      '<div class="nes-balloon from-left">',
      ' <p class=" mr-auto text-left"> <small class="text-primary">',
      '@', $row['postUser'], ' ',
      '<span class="text-muted">', $row['postDate'] , '</span></small> </p>',
      '<p>', $row['postText'], '</p>',
      '</div> </section> ',
      '<i class="', $row['postAvatar'] ,' icon-rotate icon-flipped"></i>';

      } else {

        
      echo '<section class="message -right">',
      
      '<div class="nes-balloon from-right">',
      ' <p class=" mr-auto text-left"> <small class="text-primary">',
      '@', $row['postUser'], ' ',
      '<span class="text-muted">', $row['postDate'] , '</span></small> </p>',
      '<p>', $row['postText'], '</p>',
      '</div>',
      
      
      '</section> ',
      '<i class="', $row['postAvatar'] ,' ml-auto"></i>';

      }





      /*  $row['postUser'], ": ", $row['postText'], '</p>'; */

/*
      <section id="message-list" class="message-list">
      <section class="message -left">
          <i class="nes-bulbasaur icon-rotate icon-flipped"></i>
          <!-- Balloon -->
          <div class="nes-balloon from-left">
          <p class=" mr-auto text-left"> <small class="text-primary"> ` + ` Ness ` + ` <span class="text-muted"> @Charmander1996 </span></small> </p>
          <p> ` + messages[i] + ` </p> 
          </div>
      </section>*/


    }

    $conn->close();

}


                  ?>

                </section>
            </section>

        </section>

        <!-- Right Bar -->
        <div  class="col-12 col-md-3 border">
            <div class="row">
                
                <!-- Advertisements apparently -->
                <section class="col-12 border">
                    Version Alpha
                    Static HTML Template version! Huzzah!
                </section>

                <!-- Who to follow -->
                <section class="col-12 border">
                    Who to Follow (coming never)
                </section>
          
            </div>
        </div>

    </div>
  </div>



<!-- Modal -->
<div class="modal fade" id="writePost" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Write Post</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
  <!-- TODO: UNCOMMENT THIS WHEN PREPARING TO AJAX CALLS --> 
      <form method="POST" id="postForm" action="scripts/newPost.php"> 
      <div class="modal-body">
      <label for="textarea_field">Say what's in your <i class="nes-icon heart"></i> </label>
          <textarea name="textarea_field" id="textarea_field" maxlength="160" class="nes-textarea"></textarea>

        
      </div>




      <div class="modal-footer">
      
        <p class="text-secondary mr-auto" id="postTextCounter" > 0/160 </p>
        <button type="button" class="nes-btn is-warning" data-dismiss="modal">Close</button>
        
        <button type="submit" id="newPost"   class="nes-btn is-primary "  >Post! </button>
        </form> 
      
      </div>
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  
  <script src="./scripts/helper.js"> </script>

  </body>
</html>
