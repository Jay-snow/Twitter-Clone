//This file is mostly ajax.

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




//POSTBOX TEXT UPDATER 0/160
// This lets the user know how many characters they have left.
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


 


//POST TEXT
//AJAX call to request PHP logout. I -think- this is slightly faster than directing to the PHP file, because it says 1 page from being loaded.


// (function() {
//   var httpRequest;
//   //Adds a listener to the logout
//   var postButton = document.getElementById("newPost");
//   postButton.addEventListener('click', makeRequest);

  

//   //Makes the request from the server
//   function makeRequest() {
//     httpRequest = new XMLHttpRequest();

//     if (!httpRequest) {
//       alert('Giving up, Cannot create instance');
//       return false;
//     }
//     //Execution of request is passed to alertContents
//     httpRequest.onreadystatechange = alertContents;
//     //This script should pass post data into database
//     httpRequest.open('POST', './scripts/newPost.php');
//     httpRequest.send();
    
    
//   }
//     //Checks is response was recieved OK, if not, throw an error.
//     //In case it can't reach the server, show a description why with try catch
//     function alertContents() {
     
//         if (httpRequest.readyState === XMLHttpRequest.DONE) {
//           if (httpRequest.status === 200) {
//             console.log("The request was successful!");
//             newPost();
//             alert("TEST2");

           

//           } else {
//             console.log('There was a problem with the request.');
//           }
//         }

//     }
  
// })();
