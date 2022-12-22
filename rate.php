<?php
    session_start();
       if(isset($_POST["sub"]))
       {
         $conn = mysqli_connect("sql12.freemysqlhosting.net", "sql12357529", "uf3dW6yXYw", "sql12357529") or die("Not Connected");
         //$conn = mysqli_connect("localhost", "root", "", "home") or die("Not Connected");
         $na=$_SESSION["name"];
         $sl= mysqli_query($conn, " SELECT rating , noofpeopleviewed FROM `kitrating` WHERE name='$na' ")or die("Not Connected");
         if (mysqli_num_rows($sl)>0)
         {
            $k=0;
            $rate=[];
            $nopeop=[];
                    while($row = $sl->fetch_assoc())
                     {

                       $rate[$k]=$row["rating"];
                       $nopeop[$k]=$row["noofpeopleviewed"];
                       $k++;
                      }


             }
         $a=$_POST['rank'];

         if($_POST['rank']!=0)
         {
         $n=($rate[0]+$a)/2;
         $c=$nopeop[0]+1;
         $sql = mysqli_query($conn, "UPDATE  `kitrating` SET rating='$n', noofpeopleviewed='$c' WHERE name='$na' ") or die("Not Connected");
        }
        $rev=$_POST['rev'];
        $sr=mysqli_query($conn, "INSERT INTO `kitreview` (`id`,`name`,`review`) VALUES ('','$na','$rev')")or die("N");
        header("location:home.php");}?>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<title>HOME</title>
</head>
<style>

  .checked {
  color: white;
}
input[type=text] {
  border: none;
  background-color: none;
  outline: 0;
  font-size: 25px;
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
    
     <!-- Fixed navbar -->
    <div align="center">
      <h2>Add Review</h2>
    <small><b><?php echo $_SESSION["name"] ?></b></small><br>
    </div>
    <a href="home.php"><img width=30px height=30px src="back.png"></a> <br><br>
    <h3>Rate Your Experience<h3>
      <hr>
      <form method="post" action="#">
      <div class="container">

  		<div class="row">
  			<div class="col-sm-3">
  				<div class="rating-block">
  					<h4>Average user rating</h4>
            <input type="hidden" id="myrank" name="rank" value=0>

  					<button type="button" class="btn btn-default"  >
              <span class="fa fa-star checked"  onclick = "changecolor1()" id="image1"></span>
  					</button>
  					<button type="button" class="btn btn-default "  >
  					               <span class="fa fa-star checked" onclick = "changecolor2()" id="image2"></span>
  					</button>
  					<button type="button" class="btn btn-default "  >
  					                <span class="fa fa-star checked" onclick = "changecolor3()" id="image3"></span>
  					</button>
  					<button type="button" class="btn btn-default"  >
  					               <span class="fa fa-star checked" onclick = "changecolor4()" id="image4"></span>
  					</button>
  					<button type="button" class="btn btn-default">
  					          <span class="fa fa-star checked"  onclick = "changecolor5()" id="image5" ></span>
  					</button>
  				</div>
  			</div>
  		</div>
      </div>
      <hr>
      <h2>Write a review</h2>
      <br>
      <input type="text" class="center" name="rev" placeholder="Enter your review here.">
      <hr>
      <small id="info" class="form-text text-muted">Be polite and friendly.This is a place for love and feedback,not hate.</small>
      <br>
      <div align="center"><button type="submit" class="button1" name="sub">Submit Delivery review</button></div>
    </form>

    <div id="in"></div>
      <script>
      function changecolor1(){
      document.getElementById("myrank").value =1;
      document.getElementById("image1").style.color= "orange";
       document.getElementById("image2").style.color= "grey";
          document.getElementById("image3").style.color= "grey";
            document.getElementById("image4").style.color= "grey";
            document.getElementById("image5").style.color= "grey";

      };
      function changecolor2(){
      document.getElementById("image1").style.color= "orange";
        document.getElementById("image2").style.color= "orange";
         document.getElementById("image3").style.color= "grey";
            document.getElementById("image4").style.color= "grey";
            document.getElementById("image5").style.color= "grey";

        document.getElementById("myrank").value =2;
      };
      function changecolor3(){
      document.getElementById("image1").style.color= "orange";
        document.getElementById("image2").style.color= "orange";
          document.getElementById("image3").style.color= "orange";
          document.getElementById("image4").style.color= "grey";
            document.getElementById("image5").style.color= "grey";
            document.getElementById("myrank").value =3;
      };
      function changecolor4(){
      document.getElementById("image1").style.color= "orange";
        document.getElementById("image2").style.color= "orange";
          document.getElementById("image3").style.color= "orange";
            document.getElementById("image4").style.color= "orange";
            document.getElementById("image5").style.color= "grey";
              document.getElementById("myrank").value =4;
      };
      function changecolor5(){
      document.getElementById("image1").style.color= "orange";
        document.getElementById("image2").style.color= "orange";
          document.getElementById("image3").style.color= "orange";
            document.getElementById("image4").style.color= "orange";
            document.getElementById("image5").style.color= "orange";
              document.getElementById("myrank").value =5;
      };


      </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
    </html>
