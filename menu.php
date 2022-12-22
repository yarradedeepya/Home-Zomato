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
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>


    <title>HOME</title>
  </head>
  <style>
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
  figcaption {
      margin: 10px 0 0 0;
      font-variant: small-caps;
      font-family: Arial;
      color: gray;
  }
  .checked {
  color: orange;
}
.float-left-child {
  float: left
}

.range-wrap {
  position: relative;
  margin: 0 auto 3rem;
}
.range {
  width: 100%;
}
.bubble {
  background: green;
  color: white;
  padding: 4px 8px;
  position: relative;
  border-radius: 4px;
  left: 50%;
  transform: translateX(-50%);
}
.bubble::after {
  content: "";
  position: absolute;
  width: 2px;
  height: 2px;
  background: green;
  top: -1px;
  left: 50%;
}
body {
  margin: 2rem;
}
.button {
  display: inline-block;
  padding: 15px 25px;
  font-size: 15px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: black;
  background-color: white;
  border: 1;
  box-shadow: 2px lightgray;
  border-radius: 10px;
  border-color:lightgray


}

.button:hover {background-color: lightgray}

.button:active {
  background-color: lightgray;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}

  </style>
  <body>
    <?php
        $conn = mysqli_connect("sql12.freemysqlhosting.net", "sql12357529", "uf3dW6yXYw", "sql12357529") or die("Not Connected");
        //$conn = mysqli_connect("localhost", "root", "", "home") or die("Not Connected");
        $na=$_SESSION["name"];
        $sl= mysqli_query($conn, " SELECT quantity , avgcost FROM `kitquant` WHERE name='$na' ")  or die("Not Not Connected");
        $slr= mysqli_query($conn, " SELECT Rice ,LadiesFingureFry, sambar ,curd, berakaya FROM `kititems` WHERE kitchen='$na' ")  or die("Not Not Connected");
        if (mysqli_num_rows($sl)>0)
        {
           $k=0;
           $quant=[];
           $cost=[];
                   while($row = $sl->fetch_assoc())
                    {

                      $quant[$k]=$row["quantity"];
                      $cost[$k]=$row["avgcost"];
                      $k++;
                     }

            }

            if (mysqli_num_rows($slr)>0)
            {
               $i=0;
               $Rice=[];
               $LdFry=[];
               $sambar=[];
               $curd=[];
               $berakaya=[];
                       while($row = $slr->fetch_assoc())
                        {

                          $Rice[$i]=$row["Rice"];
                          $LdrFry[$i]=$row["LadiesFingureFry"];
                          $sambar[$i]=$row["sambar"];
                          $curd[$i]=$row["curd"];
                          $berakaya[$i]=$row["berakaya"];
                          $i++;
                         }


                }
                $curries = array("Rice", "LadiesFingerFry", "sambar","curd","berakaya");
                $cur=array($Rice[0],$LdrFry[0],$sambar[0],$curd[0],$berakaya[0]);
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
    <form method="post" action="pay.php" id="myform" target="_parent"> 
    <a href="home.php"><img width=30px height=30px src="back.png"></a> <br><br>
    <h2><b><?php echo $_SESSION["name"] ?></b></h2><br>
    <?php
      for($i=1;$i<=$r;$i++){ ?>
    <span class="fa fa-star checked card-text"></span>
  <?php }  for($u=5;$u>$r;$u--){?>
    <span class="fa fa-star card-text"></span>
  <?php }?>
    <br>
    <p class="card-text">Number of people Rated <?php echo $rp ?> </p>
    <br><br>
    <span class='fa fa-bars float-left-child' style='font-size:24px'></span>
    <span class='float-left-child'><h3>&nbsp MENU</h3></span><br>
    <hr><br>
    <p>Quantity availble for <?php echo $quant[0] ?> persons</p>
      <p>Cost <?php echo $cost[0] ?> per person</p>
    <div align="center">
    <?php for($h=0;$h<count($curries);$h++){
      if($cur[$h]==1){
      ?>
    <figure>
    <span><img width=300 height=200   src="<?php echo "$curries[$h]".".jpg"; ?>" ></span>
    <figcaption><?php echo $curries[$h]?></figcaption>
    </figure>
  <?php }}?>
    </div>
    <label class="float-left-child">Quantity required</label>
    <div class="range-wrap float-left-child" style="width: 25%;">
    <input type="range" class="range" name="qt" min="1" max="<?php echo $quant[0] ?>">
    <output class="bubble"></output>
    </div>
    <br>
      <button type="submit" class="btn btn-primary" align="center" name="pro">Proceed</button>
    </form>

<script>
const allRanges = document.querySelectorAll(".range-wrap");
allRanges.forEach(wrap => {
  const range = wrap.querySelector(".range");
  const bubble = wrap.querySelector(".bubble");

  range.addEventListener("input", () => {
    setBubble(range, bubble);
  });
  setBubble(range, bubble);
});

function setBubble(range, bubble) {
  const val = range.value;
  const min = range.min ? range.min : 0;
  const max = range.max ? range.max : 100;
  const newVal = Number(((val - min) * 100) / (max - min));
  bubble.innerHTML = val;

  // Sorta magic numbers based on size of the native UI thumb
  bubble.style.left = `calc(${newVal}% + (${8 - newVal * 0.15}px))`;
}
</script>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
    </html>
