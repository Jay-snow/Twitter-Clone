<?php 
  $title = 'Create Your Account';
  require 'header.php';

?>
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
  <link href="./css/styles.css" rel="stylesheet">
  </head>

  <body>
  <div class="container">
    <div class="row">
    <div class="vertical-center">

    
      <p> Wait I'm not ready for committment! 
       <button onclick="javascript:window.history.back();"> Take me back captain! </button>
      </p>

    <!-- Create Account Form -->
    <section class="col col-md-6 m-auto  ">
      <form id="accountForm" action="scripts/signup.php" method="POST">
        <div class="card card-body">
          <h3 class="text-center mb-4">Sign-up</h3>
          <!-- <div class="alert alert-danger">
                <a class="close font-weight-light" data-dismiss="alert" href="#">×</a>Password is too short.
            </div>
              -->
          <fieldset>
              <div class="form-group has-error">
                  Username <input id="username" class="form-control input-lg d-inline"  name="username" type="text" required>
              </div>
              <div class="form-group has-error">
                  First Name <small>(optional)</small> <input class="form-control input-lg d-inline"  name="fname" type="text">
              </div>
              <div class="form-group has-error">
                  Avatar: <select name="avatar">
                    <option value="nes-bulbasaur">Bulbasaur</option>
                    <option value="nes-charmander">Charmander</option>
                    <option value="nes-squirtle">Squirtle</option>
                  </select>
              </div>
              <div class="form-group has-success">
                Password  <input id="passwordInput" class="form-control input-lg" name="password" value="" type="password" required>
              </div>
              <div class="form-group has-success">
                Confirm Password  <input id="passwordConfirm" class="form-control input-lg"  name="confirm-password" value="" type="password">
              </div>
              <!-- <div class="checkbox">
                  <label class="small">
                      <input name="terms" type="checkbox">I have read and agree to the <a href="#">terms of service</a>
                  </label>
              </div> -->
              <input id="makeaccount"  class="btn btn-lg btn-primary btn-block" value="Sign Me Up" >
          </fieldset>
        </div>
      </form>  
    </section>

    </div>


    </div>
  </div>
  <script>
    var submitButton = document.getElementById("makeaccount");
    var passwordInput = document.getElementById("passwordInput");
    var passwordConfirm = document.getElementById("passwordConfirm");
    var accountForm = document.getElementById("accountForm");
    const username = document.getElementById("username");

    submitButton.addEventListener('click',validateSubmit);

    function validateSubmit() {

      if (passwordInput.value === passwordConfirm.value)
      {
        alert("Your passwords match!");
        

        if (username.value !== "" ){
          accountForm.submit();
          
        } else {
          alert("You need a username");
        }



      } else {
        alert("your passwords don't match");

      }

    }
  </script>

  </body>
</html>
