<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>HOME</title>
  </head>
  <body>
    <div id="demo"></div>
    <form method="post" enctype="multipart/form-data">
    <label >kitchen Name:</label>
    <input type="text" placeholder="Enter your Kitchen Name" name="kitn" required></input><br>
    <input type="hidden" id="lat" name="lat" required>
    <input type="hidden" id="lng" name="long" required>
    <label for="myfile">uplod image of your kitchen:</label>
    <input type="file" id="file" name="file" required><br><br>
    <label >Quantiy made in number of persons:</label>
    <input type="text" placeholder="Enter your number" name="num" required></textarea><br>
    <label >Cost:</label>
    <input type="text" placeholder="Enter your number" name="cos" required></textarea><br>
    <label >Enter your adress:</label><br>
    <textarea id="w3review" name="w3review" placeholder="Address" rows="4" cols="60" onkeyup="getLocation()">
    </textarea><br>
    <label >Describe your kitchen:</label><br>
    <textarea id="review" name="review" placeholder="Describe your kitchen"  rows="4" cols="50">
    </textarea>
    <div class="custom-control custom-checkbox">
      <input type="checkbox" class="custom-control-input" id="item1" name="item1">
      <label class="custom-control-label" for="item1">Rice</label>
        </div>
      <br>
      <div class="custom-control custom-checkbox">
      <input type="checkbox" class="custom-control-input" id="item2" name="item2">
      <label class="custom-control-label" for="item2">LadiesFingure fry</label>
    </div>
    <br>
    <div class="custom-control custom-checkbox">
    <input type="checkbox" class="custom-control-input" id="item3" name="item3">
    <label class="custom-control-label" for="item3">sambar</label>
  </div>
  <br>
  <div class="custom-control custom-checkbox">
  <input type="checkbox" class="custom-control-input" id="item4" name="item4">
  <label class="custom-control-label" for="item4">curd</label>
</div>
<br>
<div class="custom-control custom-checkbox">
<input type="checkbox" class="custom-control-input" id="item5" name="item5">
<label class="custom-control-label" for="item5">berakaya</label>
</div>

    <button type="submit" class="btn btn-primary" name="count_sub">Submit</button>
    </form>
    <?php
    if(isset($_POST['count_sub'])){
    if($_FILES['file']['name']!=""){
      $$_FILES['file']['name']=$_POST['kitn'];
      move_uploaded_file($_FILES['file']['tmp_name'], 'fig/'. $_FILES['file']['name']);
    }
    $conn = mysqli_connect("sql12.freemysqlhosting.net", "sql12357529", "uf3dW6yXYw", "sql12357529") or die("Not Connected");
    //$conn = mysqli_connect("localhost", "root", "", "home") or die("Not Connected");
    $b=$_POST['kitn'];
    $n=$_POST['num'];
    $c=$_POST['cos'];
    $d=$_POST['w3review'];
    $k=$_POST['review'];
    $la=$_POST['lat'];
    $lo=$_POST['long'];
    $i1=isset($_POST['item1']) ? 1 : 0;
    $i2=isset($_POST['item2']) ? 1 : 0;
    $i3=isset($_POST['item3']) ? 1 : 0;
    $i4=isset($_POST['item4']) ? 1 : 0;
    $i5=isset($_POST['item5']) ? 1 : 0;
    $s=mysqli_query($conn, "INSERT INTO `kitadd` (`id`,`name`,`description`,`lat`,`lng`) VALUES ('','$b','$k','$la','$lo')")or die("Not Not Connected");
    $sql = mysqli_query($conn, "INSERT INTO `kitquant` (`id`,`name`,`quantity`,`avgcost`) VALUES ('','$b','$n','$c')")or die("Not Not Not Not Connected");
    $sql = mysqli_query($conn, "INSERT INTO `kitrating` (`id`,`name`,`rating`,`noofpeopleviewed`) VALUES ('','$b','0','0')")or die("Not Not Not Not Connected");
    $sq  = mysqli_query($conn, "INSERT INTO `kititems` (`id`,`kitchen`,`Rice`,`LadiesFingurefry`,`sambar`,`curd`,`berakaya`) VALUES ('','$b','$i1','$i2','$i3','$i4','$i5')")or die("Not Not NOT Connected");

  }
    ?>
<script>

function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.watchPosition(showPosition);
  } else {
    x.innerHTML = "Geolocation is not supported by this browser.";
  }
}

function showPosition(position) {
     document.getElementById("demo").innerHTML="i";
     document.getElementById("lat").value="Latitude: " + position.coords.latitude;
     document.getElementById("lng").value=",Longitude: " + position.coords.longitude;
     document.getElementById("w3review").value="Latitude: " + position.coords.latitude +",Longitude: " + position.coords.longitude;

}


</script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
  </html>
