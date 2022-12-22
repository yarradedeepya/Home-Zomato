
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
left:1%;
right:5%;
border:none;
}
  a.custom-card,
a.custom-card:hover {
  color: inherit;
}

  .checked {
  color: orange;
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
  </style>
  <body>
  <div class="card-deck">
  <div align="center">
  <?php
       $conn = mysqli_connect("sql12.freemysqlhosting.net", "sql12357529", "uf3dW6yXYw", "sql12357529") or die("Not Connected");
      //$conn = mysqli_connect("localhost", "root", "", "home") or die("Not Connected");
      $sql = mysqli_query($conn, "SELECT name , lat , lng FROM `kitadd`");
      $sl= mysqli_query($conn, "SELECT quantity , avgcost FROM `kitquant`") or die("Not NOT Connected");
      if (mysqli_num_rows($sql)>0){
         $i=0;
         $k=0;
         $user=[];
         $quant=[];
         $cost=[];
         $lat=[];
         $lng=[];
               while($row = $sql->fetch_assoc())
                {

                  $user[$i]=$row["name"];
                  $lat[$i]=$row["lat"];
                  $lng[$i]=$row["lng"];
                  $i++;
                 }
                 while($row = $sl->fetch_assoc())
                  {

                    $quant[$k]=$row["quantity"];
                    $cost[$k]=$row["avgcost"];
                    $k++;
                   }

          }
  for($j=0;$j<mysqli_num_rows($sql);$j++)
  {

      $srl= mysqli_query($conn, "SELECT rating , noofpeopleviewed FROM `kitrating` WHERE name='$user[$j]' ") or die("Not Connected");
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
  <form method="post" action="kitchen1.php" id="myform" target="_parent">
  <input type="hidden" id="name" name="name" value="<?php echo $user[$j]?>" required>
  <input type="hidden"  name="lat" value="<?php echo $lat[$j]?>" required>
  <input type="hidden"  name="lng" value="<?php echo $lng[$j]?>" required>
  <div class="card" id="<?php echo $user[$j] ?>"  name="<?php echo $user[$j] ?>" style="width:350;">
  <img class="card-img-top" src="fig/<?php echo "$user[$j]".".jpg"; ?>" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title" name="<?php echo $user[$j] ?>"><?php echo $user[$j] ?></h5>
    <input type="hidden" id="rate" name="rate" value="<?php echo $r ?>" required>
    <?php
      for($i=1;$i<=$r;$i++){ ?>
    <span class="fa fa-star checked card-text"></span>
  <?php }  for($u=5;$u>$r;$u--){?>
    <span class="fa fa-star card-text"></span>
  <?php }?>
    <p class="card-text" id="pop" name="<?php echo $rp ?> ">Number of people Rated <?php echo $rp ?> </p>
    <p class="card-text" id="cost" name="<?php echo $cost[$j] ?>" >Cost <?php echo $cost[$j] ?> </p>
    <input type="hidden"  name="cost" value="<?php echo $cost[$j] ?>" required>
    <div id="div1" name="div1"><p class="card-text">Quantity available <?php echo $quant[$j] ?></p></div>
    <button type="submit" class="btn btn-primary" name="sub">View</button>
  </div>
  </div>
</form>
  <br>
<?php }?>
</div>
</div>
<script>
var divs=document.getElementsByName("div1");
var names=document.getElementsByName("name");
var form=document.getElementsByTagName("form");
setInterval(function(){
reload();
},  1000);

function reload(){
  for(i = 0; i < divs.length; i++) {
    var kitsname=names[i].value;
      $(divs[i]).load("costajax.php" , {kitna: kitsname});
        if(divs[i].innerHTML=="Quantity available 0"){
            form[i].style.display = "none";
      }
}

}

</script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
    </html>
