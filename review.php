<?php
 session_start();
 ?>
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

  </style>
  <body>
    <a href="home.php"><img width=30px height=30px src="back.png"></a> <br><br>
    <div align="center">
      <h2>Reviews</h2>
    <small><b><?php echo $_SESSION["name"] ?></b></small><br>
    </div>
    <?php
     $conn = mysqli_connect("sql12.freemysqlhosting.net", "sql12357529", "uf3dW6yXYw", "sql12357529") or die("Not Connected");
      $na=$_SESSION["name"];
      $sl= mysqli_query($conn, " SELECT review FROM `kitreview` WHERE name='$na' ")or die("Not Connected");
      if (mysqli_num_rows($sl)>0)
      {
         $k=0;
         $review=[];
                 while($row = $sl->fetch_assoc())
                  {

                    $review[$k]=$row["review"];
                    $k++;
                   }
          }
          if(mysqli_num_rows($sl)>0){
          for($j=0;$j<mysqli_num_rows($sl);$j++){
            ?>
            <br> <b>
        <?php echo $review[$j];?>
     </br><br>
      <hr>
    <?php } }else{
    ?> <br><b> <?php echo "No reviews at be the First";
    } ?>  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
    </html>
