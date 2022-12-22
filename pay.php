<?php
session_start();
  if(isset($_POST['proc'])){
            $conn = mysqli_connect("sql12.freemysqlhosting.net", "sql12357529", "uf3dW6yXYw", "sql12357529") or die("Not Connected");
          $na=$_SESSION["name"];
          $q=$_POST["qt"];
          $n=$_POST['quant']-$q;
        $sql = mysqli_query($conn, "UPDATE  `kitquant` SET quantity='$n'  WHERE name='$na' ") or die("Not Connected");
         header("location:home.php");
        }
       
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
  input[type=text] {
    border: none;
    background-color: none;
    outline: 0;
    font-size: 15px;
    width: 1000px;
    height: 30px;
  }

  input[type=text]:focus {
    border: none;
    background-color: none;
    outline: 0;
    width: 1000px;
    height: 30px;
  }

  .side{
    float:left;
    left:0px;
    right:0px;
  }
  </style>
  <body onload="getLocation()">
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
 ?>
<form method="post" action="#">
    <input type="hidden" value=<?php echo $quant[0]; ?> name="quant">
    <input type="hidden" value=<?php echo $_POST["qt"]; ?> name="qt">
    <br>
    <br>
    <h2><label for="address">Address</label></h2>
    <input type="text" class="center" id="idrs" placeholder="Enter your adress here."><br>
    <hr style="width:50%;text-align:left;margin-left:0">
    <br>
    <div align="center">
    <h3>Reciept details</h3>
    <p><b>Total Quantity:<?php echo  $_POST["qt"] ?> persons</b></p>
    <?php for($h=0;$h<count($curries);$h++){
      if($cur[$h]==1){
      ?>
    <b><?php echo $curries[$h]?></b><br>
  <?php }}?>
  <?php
  $t=$_POST["qt"]*$cost[0];
  ?>
  <p><b>Grand Total : <?php echo  $t ?></b></p>
  </div>
  <h3>Payment Method</h3>
        <div class="custom-control custom-radio">
      <input type="radio" class="custom-control-input" id="defaultUnchecked1" name="defaultExampleRadios" value="Popularity">
      <label class="custom-control-label" for="defaultUnchecked1">Cash on delivery</label>
    </div>

    <div class="custom-control custom-radio">
      <input type="radio" class="custom-control-input" id="defaultUnchecked2" name="defaultExampleRadios" value="Rating:High To Low">
      <label class="custom-control-label" for="defaultUnchecked2">Phone Pay</label>
    </div>
    <div class="custom-control custom-radio">
      <input type="radio" class="custom-control-input" id="defaultUnchecked3" name="defaultExampleRadios" value="Delivery Time">
      <label class="custom-control-label" for="defaultUnchecked3">Google Pay</label>
    </div>
    
    <div class="custom-control custom-radio">
      <input type="radio" class="custom-control-input" id="defaultUnchecked4" name="defaultExampleRadios" value="Cost:Low To High">
      <label class="custom-control-label" for="defaultUnchecked4">Paytm</label>
    </div>
    <div align="center">
     <button type="submit" class="btn btn-primary" name="proc">Proceed</button>
     </div>
    </form> 
    <script>
    function getLocation() {
      if (navigator.geolocation) {
        navigator.geolocation.watchPosition(showPosition);
      } else {
        document.getElementById("idrs").value= "Geolocation is not supported by this browser.";
      }
    }

    function showPosition(position) {
        document.getElementById("idrs").value="Latitude: " + position.coords.latitude + ",Longitude: " + position.coords.longitude;

    }


    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
    </html>
