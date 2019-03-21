<?php

echo $_POST["username"];
echo $_POST["password"];

echo "Data has been pushed.";

$username = filter_input(INPUT_POST, 'username');
$password = filter_input(INPUT_POST, 'password');
$fname = $_POST['fname'];
$avatar = $_SESSION['avatar'];

include_once 'dbh.php';

if (!empty($username)) {
  if (!empty($password)) {


    
    
    // If you fail to connect, show an error
    if (mysqli_connect_error()){
        die('Connect Error ('. mysqli_connect_errno() .')' . mysqli_connect_error());
    }
    else
    {

      $passwordHash = password_hash($_POST["password"], PASSWORD_DEFAULT);


        $sql = "INSERT INTO users (username, password, fname, avatar) values ('$username','$passwordHash', '$fname', '$avatar')";
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