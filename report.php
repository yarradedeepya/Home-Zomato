<?php
 if(isset($_POST["sub"]))
       {
        header("location:home.php");
    }
?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>HOME</title>
    </head>
    <style>
    input[type=text] {
      border: none;
      background-color: none;
      outline: 0;
      font-size: 15px;
      width: 300px;
      height: 30px;
    }

    input[type=text]:focus {
      border: none;
      background-color: none;
      outline: 0;
      width: 300px;
      height: 30px;
    }
    
    .button1 {
  width: 300px;
  display: inline-block;
  padding: 15px 25px;
  font-size: 15px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: white;
  background-color:blue;
  border: 1;
  box-shadow: 2px lightgray;
  border-radius: 10px;
  border-color:lightgray

}

.button1:hover {background-color: pink}

.button1:active {
  background-color: pink;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}

    </style>
      <body>
      <br>
      <a href="home.php"><img width=30px height=30px src="back.png"></a> <br><br>
      <h2>Report an Error</h2>
      <hr>
      <form action="#" method="POST">
      &nbsp &nbsp<div class="custom-control custom-checkbox">
      <input type="checkbox" class="custom-control-input" id="item5" name="item5">
      <label class="custom-control-label" for="item5">This place has closed down</label>
      </div>
      <br>
      <hr>
      &nbsp &nbsp<div class="custom-control custom-checkbox">
      <input type="checkbox" class="custom-control-input" id="item6" name="item6">
      <label class="custom-control-label" for="item6">Menu is incorrect</label>
      </div>
      <br>
      <hr>
      &nbsp &nbsp<div class="custom-control custom-checkbox">
      <input type="checkbox" class="custom-control-input" id="item7" name="item7">
      <label class="custom-control-label" for="item7">Others</label>
      </div>
      <br>
      <br>
      <hr>
       <p>More info</p>
      <input type="text" class="center" placeholder="Enter your review here.">
       <hr>
      <div align="center"><button type="submit" class="button1" name="sub">Submit Report</button></div>
      <br>
      </form>

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
      </body>
      </html>
