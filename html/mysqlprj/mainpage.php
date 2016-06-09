<?php
  session_start();
  include("connection.php");
  $query ="SELECT diary FROM `users` WHERE id='".$_SESSION['id']."' LIMIT 1";
  $result = mysqli_query($link, $query);
  $row = mysqli_fetch_array($result);
  $diary = $row['diary'];
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Secret Diary Project</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <style>
      
      html, body {
        height:100%;
      }
    
    .navbar {
      margin:0px;
    }
    
      .container-fluid {
        background-image:url("images/pier.jpg");
        background-repeat:no-repeat;
        background-size:cover;
        height:100%;
        width:100%;
      }
      
      .padding {
        padding-top:20px;
        padding-bottom:20px;
      }
      
      .white {
        color:white;
      }
      
      .read {
        color:red;
      }
      
      button {
        margin-top:20px;
      }
    
      textarea {
        margin-top:50px;
        padding:20px;
        resize:none;
      }
      

    </style>
  <body>
    
    <nav class="navbar navbar-default">
      <div class="navbar-header text-center pull-left">
        <a class="navbar-brand" href="#">Secret Journal Project</a>
      </div>
      <div class="pull-right">
        <ul class="nav navbar-nav">
          <li><a href="index.php?logout=1">Log Out</a></li>
        </ul>
      </div>
    </nav>

    
    <div class="container-fluid">
      
      <div class="row">
       
        <div class="col-md-6 col-md-offset-3">
          
          <textarea class="form-control"><?php echo $diary;?></textarea>
          
        </div>
        
      </div>      
      
    </div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="scripts.js"></script>
  </body> 
</html>