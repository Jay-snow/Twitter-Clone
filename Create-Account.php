<?php 
  $title = 'Create Your Account';
  require 'header.php';

?>

  <body>
  <div class="container">
    <div class="row">
    <div class="vertical-center">

    


    <!-- Create Account Form -->
    <section class="col col-md-8 m-auto  ">
      <form id="accountForm" action="scripts/signup.php" method="POST">
        <div class="card card-body">
          <h3 class="text-center mb-4">Sign-up</h3>
          <!-- <div class="alert alert-danger">
                <a class="close font-weight-light" data-dismiss="alert" href="#">×</a>Password is too short.
            </div>
              -->
          <fieldset>
              <div class="form-group has-error">
                  Username <input  maxlength="64" id="username" class="form-control input-lg d-inline"  name="username" type="text" required>
                  <p id="usernameCounter" class="mb-3 text-right"> 0/64 </p>
              </div>
              
              <div class="form-group has-error">
                  Flavor Text <small>(optional.)</small>
                  <textarea id="fnameField" maxlength="500" class="form-control input-lg d-inline" rows="3" cols="10" name="fname" type="text"></textarea>
                  <p id="fnameCounter" class="text-right"> 0/500</p>
              </div>
              <div class="form-group has-error mt-5 mb-5">
              <div class="text-right">
              <i id="avatarExample" class="nes-bulbasaur"></i>
</div>
                  Avatar: <select id="avatarSelect" name="avatar" onchange="changeAvatar();">
                    <option value="nes-bulbasaur">Bulbasaur</option>
                    <option value="nes-charmander">Charmander</option>
                    <option value="nes-squirtle">Squirtle</option>
                  </select>
              </div>

    
              <div class="form-group has-success">
                Password  <input id="passwordInput" class="form-control input-lg" maxlength="255" name="password" value="" type="password" required>
                <p id="passwordCounter" class="text-right"> 0/255</p>
              </div>
              <div class="form-group has-success">
                Confirm Password  <input id="passwordConfirm" class="form-control input-lg" maxlength="255"  name="confirm-password" value="" type="password">
                <p id="passwordConfirmCounter" class="text-right"> 0/255</p>
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

   
       <button onclick="javascript:window.history.back();"> Back To Homepage </button>
      </p>
    </section>

    </div>


    </div>
  </div>
  <script>

//Sign-Up Page text counters
//Username 64
//fname or flavor text 500
//password 255
const usernameCounter = document.getElementById("usernameCounter");
const usernameField = document.getElementById("username");

const fnameCounter = document.getElementById("fnameCounter");
const fnameField = document.getElementById("fnameField");
const passwordCounter = document.getElementById("passwordCounter");
const passwordConfirmCounter = document.getElementById("passwordConfirmCounter");
const passwordInput = document.getElementById("passwordInput");
const passwordConfirm = document.getElementById("passwordConfirm");


document.body.addEventListener('keydown',updateUsernameText);
document.body.addEventListener('keyup',updateUsernameText);

function updateUsernameText() {
  let characterCount = usernameField.value;
  let fnameFieldCharacterCount = fnameField.value;
  let passwordInputCharacterCount = passwordInput.value;
  let passwordConfirmCharacterCount = passwordConfirm.value;

  //alert(counter.length);
  usernameCounter.textContent = characterCount.length + "/64";
  fnameCounter.textContent = fnameFieldCharacterCount.length + "/500";
  passwordCounter.textContent = passwordInputCharacterCount.length + "/255";
  passwordConfirmCounter.textContent = passwordConfirmCharacterCount.length + "/255";
}





                const avatarExample =  document.getElementById("avatarExample");
                const avatarSelect = document.getElementById("avatarSelect");

          function changeAvatar() {
            console.log("Yo!");
            avatarExample.className = "";
            avatarExample.classList.add(avatarSelect.value);
          }

    var submitButton = document.getElementById("makeaccount");


    var accountForm = document.getElementById("accountForm");
    const username = document.getElementById("username");

    submitButton.addEventListener('click',validateSubmit);

    function validateSubmit() {

      if (passwordInput.value === passwordConfirm.value)
      {
        // alert("Your passwords match!");
        

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
