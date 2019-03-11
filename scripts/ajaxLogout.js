
//LOGOUT FUNCTION
//AJAX call to request PHP logout. I -think- this is slightly faster than directing to the PHP file, because it says 1 page from being loaded.
(function() {
  var httpRequest;
  //Adds a listener to the logout
  document.getElementById("logout").addEventListener('click', makeRequest);

  //Makes the request from the server
  function makeRequest() {
    httpRequest = new XMLHttpRequest();

    if (!httpRequest) {
      alert('Giving up, Cannot create instance');
      return false;
    }
    //Execution of request is passed to alertContents
    httpRequest.onreadystatechange = alertContents;
    httpRequest.open('GET', './scripts/logout.php');
    httpRequest.send();
  }
    //Checks is response was recieved OK, if not, throw an error.
    //In case it can't reach the server, show a description why with try catch
    function alertContents() {
     
        if (httpRequest.readyState === XMLHttpRequest.DONE) {
          if (httpRequest.status === 200) {
            console.log("The request was successful!");
            window.location = 'index.php';
          } else {
            console.log('There was a problem with the request.');
          }
        }

    }



  
})();

var postTextField = document.getElementById("textarea_field");
var postTextCounter = document.getElementById("postTextCounter");


postTextField.addEventListener('keydown',updateTextCounter);
postTextField.addEventListener('keyup',updateTextCounter);
//TODO
//When user right clicks and cuts the text, update the text counter immediately.

function updateTextCounter() {
  var counter = postTextField.value;

  //alert(counter.length);
  postTextCounter.textContent = counter.length + "/160"
}

var messages = [];
var messageList = document.getElementById("message-list");

function newPost() {
  var postMessage = postTextField.value;
  messages.push(postMessage);
 // messageList.textContent += postMessage;


  for (var i = 0; i < messages.length; i++) {
    messageList.innerHTML += `
    
    <section id="message-list" class="message-list">
    <section class="message -left">
        <i class="nes-bulbasaur icon-rotate icon-flipped"></i>
        <!-- Balloon -->
        <div class="nes-balloon from-left">
        <p class=" mr-auto text-left"> <small class="text-primary"> ` + "<?php echo $_SESSION['username'] ?>" + ` <span class="text-muted"> @Charmander1996 </span></small> </p>
        <p> ` + messages[i] + ` </p> 
        </div>
    </section>
    
    `
  }

}
 

function clearText() {

}