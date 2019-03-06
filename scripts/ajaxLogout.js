
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

