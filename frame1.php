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
    .form-control-borderless {
      border: 1;

  }

  .form-control-borderless:hover, .form-control-borderless:active, .form-control-borderless:focus {
      border: 1;
      outline: none;
      box-shadow: none;

  }

  .glossyBtn
  {
      background-image:url('search.jpg');
      background-size: 30px;
      background-repeat:no-repeat;
     background-position:left;  padding-left:15px;
  }

  .input-field {
              width: 100%;
              padding: 10px;
              text-align: center;
          }
          .button {
            display: inline-block;
            padding: 10px 10px;
            font-size: 15px;
            cursor: pointer;
            text-align: center;
            text-decoration: none;
            outline: none;
            color: gray;
            background-color: white;
            border: 1;
            border-radius: 5px;
            border-width: thin;
            border-color:lightgray
          }

          .button:hover {background-color: lightgray}

          .button:active {
            background-color: lightgray;
            transform: translateY(4px);
          }




    </style>
      <body>
      <button type="button" class="button"   onclick="parent.openForm()" target="_parent"><img width=20 height=20 src="filtericon.png">filter</button>&nbsp
      <button type="button" class="button" >Nearest To Me</button>&nbsp
      <button type="button" class="button" onclick="parent.myrateFunction()">Rating: 4.5+</button>&nbsp
      <div class="form-popup" id="myForm">



      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
      </body>
      </html>
