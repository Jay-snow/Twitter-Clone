<?php

echo $_POST["username"];
echo $_POST["password"];
echo "Data has been pushed.";

$username = filter_input(INPUT_POST, 'username');
$password = filter_input(INPUT_POST, 'password');

if (!empty($username)) {
  if (!empty($password)) {
    $host = 'localhost';
    $dbusername = "root";
    $dbpassword = "z3rgImba";
    $dbname = "twitter-clone";


    // Create connection

    $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

    // If you fail to connect, show an error
    if (mysqli_connect_error()){
        die('Connect Error ('. mysqli_connect_errno() .')' . mysqli_connect_error());
    }
    else
    {
        $sql = "INSERT INTO users (username, password) values ('$username','$password')";
        if ($conn->query($sql)){
            echo "New user has been created.";
        }
        else{
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();

    }


  }
  else {
    echo "Password should not be empty";
    die();
  }
} 
else {
  echo "Username should not be empty";
  die();
}

?>