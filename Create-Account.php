

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

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
    <div class="row">
  <div class="vertical-center">
    <p> Wait I'm not ready for committment! 
  <button onclick="javascript:window.history.back();"> Take me back captain! </button>
  </p>
  <section class="col col-md-6 m-auto  ">

                <form action="connect.php" method="POST">
                <div class="card card-body">
                    <h3 class="text-center mb-4">Sign-up</h3>
                   <!-- <div class="alert alert-danger">
                        <a class="close font-weight-light" data-dismiss="alert" href="#">×</a>Password is too short.
                    </div>
                       -->
                    <fieldset>
                        <div class="form-group has-error">
                            <input class="form-control input-lg" placeholder="Enter desired username here" name="username" type="text">
                        </div>
                        <div class="form-group has-success">
                            <input class="form-control input-lg" placeholder="Password" name="password" value="" type="password">
                        </div>
                        <div class="form-group has-success">
                            <input class="form-control input-lg" placeholder="Confirm Password" name="confirm-password" value="" type="password">
                        </div>
                
                        <div class="checkbox">
                            <label class="small">
                                <input name="terms" type="checkbox">I have read and agree to the <a href="#">terms of service</a>
                            </label>
                        </div>
                        <input class="btn btn-lg btn-primary btn-block" value="Sign Me Up" type="submit">
                    </fieldset>
                </div>
                </form>
                
  </section>

    

  </div>


  </div>
  </div>
  </body>
</html>
