<?php
$host = 'localhost';
$dbusername = "root";
$dbpassword = "z3rgImba";
$dbname = "twitter-clone";
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
/*
  Connect to Database function
  if (mysqli_connect_error()){
    die('Connect Error ('. mysqli_connect_errno() .')' . mysqli_connect_error());
}
else
{
  Do something
    $sql = "INSERT INTO table (x, y) values ('123','abc')";
    if ($conn->query($sql)){
        echo "Success";
    }
    else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}
*/
?>