<?php
include("login.php");
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
        background-image:url("images/pug.jpg");
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
      
      .alert {
        
      }
    
    .largerowpadding {
      padding-top:150px;
    }
    

    </style>
  <body>
    
     <nav class="navbar navbar-default">
       <div class="navbar-header text-center">
         <a class="navbar-brand" href="#">Secret Journal Project</a>
       </div>

       <form method="post" class="navbar-form navbar-right" role="log in">

                        <div class="form-group"> 
                        <label for="loginemail">Email</label>     
                        <input type="email" class="form-control" name="loginemail" id="loginemail" placeholder="Email" value="<?php echo $_POST['loginemail']; ?>">
                        </div>
                        <div class="form-group">
                        <label for="loginpassword">Password</label> 
                        <input type="password" class="form-control" name="loginpassword" placeholder="Password" value="<?php echo $_POST['loginpassword']; ?>">
                        </div>
                        <input type="submit" name="submit" value="Log in">

        </form>           
        
      </nav>
    
  <div class="container-fluid">    
      <div class="row">
        <div class="col-md-6 col-md-offset-3 text-center padding">
          <h1>
            Secret Journal
          </h1>
          <p class="lead">
            Your own private journal, with you wherever you go.
          </p>
          <p>
            Interested? Sign up below, or log in above.
          </p>
          
          <?php
            
            if ($error) {
              echo '<div class="alert alert-danger">'.addslashes($error).'</div>';
            }
          
            if ($message) {
              echo '<div class="alert alert-success">'.addslashes($message).'</div>';
            }
            
          ?>
      
          <form method="post" class="padding">
            <div class="form-group">
            <label for="email">Email</label>     
            <input type="email" class="form-control" name="email" id="email" placeholder="Email" value="<?php echo $_POST['email']; ?>">
            </div>
            <div class="form-group">
            <label for="password">Password</label> 
            <input type="password" class="form-control" name="password" placeholder="Password" value="<?php echo $_POST['password']; ?>">
            </div>
            <input type="submit" name="submit" value="Sign up">

          </form>        

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