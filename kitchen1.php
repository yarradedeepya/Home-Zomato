<?php
 session_start();
  $_SESSION["name"]=$_POST['name'];
 ?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <title>HOME</title>
  </head>
  <style>

  .checked {
  color: orange;
}
.float-left-child {
  float: left
}
#container {
    text-align: center;
}
a, figure {
    display: inline-block;
}
figcaption {
    margin: 10px 0 0 0;
    font-variant: small-caps;
    font-family: Arial;
    color: gray;
}
figure {
    padding: 5px;
}
img:hover {
    transform: scale(1.1);
    -ms-transform: scale(1.1);
    -webkit-transform: scale(1.1);
    -moz-transform: scale(1.1);
    -o-transform: scale(1.1);
}
img {
    transition: transform 0.2s;
    -webkit-transition: -webkit-transform 0.2s;
    -moz-transition: -moz-transform 0.2s;
    -o-transition: -o-transform 0.2s;
}
.imgtry{
  transition: transform 0.2s;
  -webkit-transition: -webkit-transform 0.2s;
  -moz-transition: -moz-transform 0.2s;
  -o-transition: -o-transform 0.2s;
}
.imgtry:hover{
  transform: scale(1.1);
  -ms-transform: scale(1.1);
  -webkit-transform: scale(1.1);
  -moz-transform: scale(1.1);
  -o-transform: scale(1.1);
}

.button1:active{
  color: black;
}
  </style>
  <body>
    <?php
    $conn = mysqli_connect("sql12.freemysqlhosting.net", "sql12357529", "uf3dW6yXYw", "sql12357529") or die("Not Connected");
    //$conn = mysqli_connect("localhost", "root", "", "home") or die("Not Connected");
    $na=$_POST["name"];
    $srl= mysqli_query($conn, "SELECT rating , noofpeopleviewed FROM `kitrating` WHERE name='$na' ") or die("Not Connected");
    if (mysqli_num_rows($srl)>0){
                $rat=[];
                $peop=[];
                $z=0;
                $p=1;
               while($row = $srl->fetch_assoc())
                {
                  $rat[$z]=$row["rating"];
                  $r= $rat[$z];
                  $peop[$z]=$row["noofpeopleviewed"];
                  $rp=  $peop[$z];
                  $z++;
                 }

        }
    else{
      $p=0;
    }
     ?>
    
    <img width=100% height=300 src="fig/<?php echo "$na".".jpg"; ?>" alt="Card image cap">
    <br>
    <h2><b><?php echo $_POST["name"] ?></b></h2><br>
    <?php
      for($i=1;$i<=$r;$i++){ ?>
    <span class="fa fa-star checked card-text"></span>
  <?php }  for($u=5;$u>$r;$u--){?>
    <span class="fa fa-star card-text"></span>
  <?php }?>
    <br>
    <p class="card-text">Number of people Rated <?php echo $rp ?> </p>
    <hr>
    <div >
    <a href=rate.php>
    <figure>
    <span class="fa fa-star checked card-text child float-left-child imgtry" style='font-size:36px'></span>
    <figcaption>Rateus</figcaption>
    </figure>
     </a>
    <figure>
    <span  class='far fa-bookmark child float-left-child imgtry' onclick = "changecolor()" id="image1" style='font-size:36px'></span>
    <figcaption>Bookmark</figcaption>
  </figure>
  <a href=report.php>
    <figure>
    <span><img width=50 height=50 src="report.png"></span>
    <figcaption>Report</figcaption>
    </figure>
  </a>
  <a href=review.php>
    <figure>
    <span><img width=50 height=50 src="feedback.jpg"></span>
    <figcaption>Reviews</figcaption>
    </figure>
  </a>
    <hr>
    <div class='parent'>
    <div class='child float-left-child'><img float=left  width=50 height=60 src="bike2.jpg"></div>
    <div class='child float-left-child'><h3>Order food online</h3></div>
    <div align="right"><a href="menu.php"><span  class="fa fa-arrow-circle-right" style="font-size:36px"></span></a></div>
    </div>
    <hr>
    <h3>Description Of Kitchen </h3>
    <?php
    $srkl= mysqli_query($conn, "SELECT description FROM `kitadd` WHERE name='$na' ") or die("not Not Connected");
    $desc=[];
    $vb=0;
    while($rowk = $srkl->fetch_assoc())
     {
       $desc[$vb]=$rowk["description"];
       $vb++;
      }
     ?>
    <pre>
    <?php echo $desc[0]; ?>
    </pre>
<script>
var status=1;
function changecolor(){
if(status==1){   
document.getElementById("image1").style.color= "green";
status=2;
}
else if(status==2){
document.getElementById("image1").style.color= "black";
status=1;
}
};
</script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
  </html>
