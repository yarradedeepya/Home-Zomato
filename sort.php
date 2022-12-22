<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <title>HOME</title>
  </head>
  <style>
  * {
margin:0;
padding:0;
left: 5%;
border:none;
}

.button:hover {background-color:pink}

.button:active {
  background-color: lightgray;
  transform: translateY(4px);
}

  </style>
  <body>

    <div class="custom-control custom-radio">
      <input type="radio" class="custom-control-input" id="defaultUnchecked1" name="defaultExampleRadios" value="Popularity">
      <label class="custom-control-label" for="defaultUnchecked1">Popularity</label>
    </div>
    <br>
    <div class="custom-control custom-radio">
      <input type="radio" class="custom-control-input" id="defaultUnchecked2" name="defaultExampleRadios" value="Rating:High To Low">
      <label class="custom-control-label" for="defaultUnchecked2">Rating:High To Low</label>
    </div>
    <br>
    <div class="custom-control custom-radio">
      <input type="radio" class="custom-control-input" id="defaultUnchecked3" name="defaultExampleRadios" value="Delivery Time">
      <label class="custom-control-label" for="defaultUnchecked3">Delivery Time</label>
    </div>
    <br>
    <div class="custom-control custom-radio">
      <input type="radio" class="custom-control-input" id="defaultUnchecked4" name="defaultExampleRadios" value="Cost:Low To High">
      <label class="custom-control-label" for="defaultUnchecked4">Cost:Low To High</label>
    </div>
    <br>
    <div class="custom-control custom-radio">
      <input type="radio" class="custom-control-input" id="defaultUnchecked5" name="defaultExampleRadios" value="Cost:High To Low">
      <label class="custom-control-label" for="defaultUnchecked5">Cost:High To Low</label>
    </div>
    <br>
    <div align="center">
    <button type="submit" class="btn btn-primary button" name="sub" id="sub"  onclick="parent.mysortFunction()">Apply</button>
    
  </div>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
    </html>
