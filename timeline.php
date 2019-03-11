<?php


  session_start();

  //var_dump($_SESSION);

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


    <title>Your Timeline</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="./css/nes.min.css" rel="stylesheet" />
  <link href="./css/press-start-font.css" rel="stylesheet">
  <link href="./css/styles.css" rel="stylesheet">

  </head>

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

<!-- Button trigger modal -->



          <button type="button" class="nes-btn is-primary" data-toggle="modal" data-target="#writePost" href="#">Write Post</button>
        </nav>
      </div>
    </div>
  </div>

  <div class="container-fluid">
    <div class="row">

      <!-- User Profile -->
      <div  class="col-3 border">
            <section class="nes-container with-title">
            <p class="title"> <?php echo $_SESSION['username'] ?> </p>
            
            <i class="nes-bulbasaur mb-3"></i>
            <p> Literally #1 </p>
            <p> Posts: 321894  </p>
            <p> Likes: 0 </p>

          </section>    
    </div>

      <!-- Timeline -->
        <section  class="col-6 border">
            
            <section class="nes-container with-title">
                <h3 class="title">Timeline </h3>

                <section id="message-list" class="message-list">


                </section>
            </section>

        </section>

        <!-- Right Bar -->
        <div  class="col-3 border">
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
      <div class="modal-body">
      <label for="textarea_field">Say what's in your <i class="nes-icon heart"></i> </label>
          <textarea id="textarea_field" maxlength="160" class="nes-textarea"></textarea>

        
      </div>




      <div class="modal-footer">
      
        <p class="text-secondary mr-auto" id="postTextCounter" > 0/160 </p>
        <button type="button" class="nes-btn is-warning" data-dismiss="modal">Close</button>
        <button type="button" onclick="newPost();" data-dismiss="modal" class="nes-btn is-success">Post!</button>
      
      </div>
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  
  <script src="./scripts/ajaxLogout.js"> </script>


    <style>
    /*  If the textbox field changes. Count the number of characters, and update the character counter. */
    
    </style>

  </body>
</html>
