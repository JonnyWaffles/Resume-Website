<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Weather Scrapper</title>

    <!-- Bootstrap -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
      
      html, body {
        height:100%;
      }
    
      .container-fluid {
        background-image:url("images/pier.jpg");
        background-repeat:no-repeat;
        background-size:cover;
        height:100%;
        width:100%;
        padding-top:150px;
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
        display:none;
      }
    
    </style>
  </head>
  <body>

    <div class="container-fluid">
      
      <div class="row">
        
        <div class="col-md-6 col-md-offset-3">
          
          <div id="weatherbox" class="text-center white">
            
            <h1>
              Weather
            </h1>
            <p class="lead padding">
              Welcome to the weather channel. Enter your city. 
            </p>
            <form>
              <div class="form-group">
                <label for="city">What is your city?</label>
                <input type="text" class="form-control" id="city"  placeholder="Eg. London, New York, Paris...">
              </div>
              <div class="form-group">
                <button type="button" class="btn btn-success btn-large" id="findButton">
                  Find my Weather
                </button>
              </div>
            </form>
            <div class="alert alert-info" id="success">
            </div>
            <div class="alert alert-danger" id="fail">
              Could not find city. Please try again.
            </div>
            <div class="alert alert-danger" id="noCity">
              Please enter a city.
            </div>
            
            
          </div>
          
        </div>
        
      </div>
      
    </div>
    

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script src="scripts.js" type="text/javascript"></script>
  </body>
</html>