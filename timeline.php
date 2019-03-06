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
    <link href="https://unpkg.com/nes.css@latest/css/nes.min.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Press+Start+2P" rel="stylesheet">
  <link href="./css/styles.css" rel="stylesheet">

  </head>

  <body class="text-center">

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
          <a class="nes-btn is-primary" href="#">Write Post</a>
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

                <section class="message-list">
                <section class="message -left">
                    <i class="nes-charmander icon-rotate icon-flipped"></i>
                    <!-- Balloon -->
                    <div class="nes-balloon from-left">
                    <p class=" mr-auto text-left"> <small class="text-primary">char headed 2 bar <span class="text-muted"> @Charmander1996 </span></small> </p>
                    <p>agreed bruh. honestly i can't stand grass types LOL</p>
                    </div>
                </section>

                <section class="message -right">
                    <!-- Balloon -->
                    <div class="nes-balloon from-right">
                    <p class=" mr-auto text-left"> <small class="text-primary">water_Tuurtz <span class="text-muted"> @squritlemguritle </span></small> </p>
                    <p>Bulbasaur has got to be the worst starter.</p>
                    </div>
                    <i class="nes-squirtle"></i>
                </section>
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

  <script src="./scripts/ajaxLogout.js"> </script>

  </body>
</html>
