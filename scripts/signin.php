<?php

if (isset($_POST['submit']))
{

  include_once 'dbh.php';
  $username = filter_input(INPUT_POST, 'username');
$password = filter_input(INPUT_POST, 'password');

if (!empty($username)) {
  if (!empty($password)) {


    
    
    // If you fail to connect, show an error
    if (mysqli_connect_error()){
        die('Connect Error ('. mysqli_connect_errno() .')' . mysqli_connect_error());
    }
    else
    {
        //If successfully connected, do a thing
        $sql = "SELECT * FROM users WHERE username = '$username'";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_array($result);
      //  $passwordHash = password_hash('password', PASSWORD_DEFAULT);

       //   var_dump($row['username']);
       //   var_dump($row['password']);
       //   echo $password;


          
        // If the query returns null
        if (isset($row['username'])  ) {
          
          echo "\n User name verified\n \n";
          echo "<br>";
          
           $passwordHash = $row['password'];
          $hashPost = password_hash($_POST['password'],PASSWORD_DEFAULT);


          echo "\r\n The Password not hashed: ";
          echo $_POST['password'];

          echo "<br>";
          echo 'The Password Hashed: ';
          echo $hashPost;

          echo "<br>";
          echo 'The Real Hash: ';
          echo $row['password'];

          $localHash = '$2y$10$gFvw5TBD9HZSOTIZfELJK.IUyBRO35Gg0QHZWiNlv3CR8wfMf2AG6';

          echo "<br> Does Password Validate: ";
          $istrue = password_verify($_POST['password'], $hashPost);
          var_dump($istrue);
          echo "<br> Local Hash: ";
          var_dump($localHash);
          echo "<br> Actual Stored Password/Hash: ";
          var_dump($row['password']);
          echo "<br> New Hash from input: ";
          var_dump($hashPost);

          

          if ( password_verify($_POST['password'], $passwordHash) ) {

            

            $_SESSION["username"] = $username;
          $_SESSION["loggedin"] = true;
          

          echo "Welcome! " , $_SESSION['username'];
          header("Location: ../timeline.php");
          var_dump($_SESSION);

           
          }


        } else {
           //echo $row;
        //var_dump($row);

          
          echo "An error has occured. You were not found in the database";
          header("Location: ../index.php?login=NameFound");
          exit();
        }

       //Debugging code, might remove soon.
        /*
        if ($conn->query($sql)){
          //  echo "successful connection";
        }
        else{
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();
        */
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

}
?>