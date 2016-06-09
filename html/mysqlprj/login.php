<?php

  session_start();

  if($_GET["logout"]==1 AND $_SESSION['id']) {
    session_destroy();
    $message="You have been logged out. Have a nice day";
  }
  
  include("connection.php");

  if ($_POST['submit'] == "Sign up") {
    
    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
      $error.= ("<br>Email is not valid");
    } else {
      $email = $_POST['email'];
    }
    
    if (empty($_POST['password'])) {
      $error.= "<br>Please enter a password";
    } elseif (strlen($_POST['password']) < 8) {
      $error.= "<br>Your password must be eight characters or more";
    } 
    
  
    if ($error) $error = "There were the following error(s):".$error; 
      else {
        $query = "SELECT * FROM `users` WHERE email='".mysqli_real_escape_string($link, $_POST['email'])."'";
        $result = mysqli_query($link, $query);
        $numResults = mysqli_num_rows($result);
        
        if ($numResults) $error = "That email is already registered. Do you want to log in?";
        else {
          $query="INSERT INTO `users` (email, password) VALUES('".mysqli_real_escape_string($link, $_POST['email'])."','".md5(md5($_POST['email']).$POST_['password'])."')";
          mysqli_query($link, $query);
          echo "You've been signed up";
          
          $_SESSION['id'] = mysqli_insert_id($link);
          
          header("Location:mainpage.php");
        }
      } 

  }

if ($_POST['submit'] == "Log in") {
  $query = "SELECT * FROM `users` WHERE email='".mysqli_real_escape_string($link, $_POST['loginemail'])."' AND password='".md5(md5($_POST['loginemail']).$POST_['loginpassword'])."' LIMIT 1";
  $result = mysqli_query($link, $query);
  $row = mysqli_fetch_array($result);
  if ($row) {
    $_SESSION['id'] = $row['id'];
    
    header("Location:mainpage.php");
      
  } else {
    $error = "We could not find a user with that email and password.";
  }
}


?>