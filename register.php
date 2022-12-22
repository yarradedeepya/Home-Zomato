<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Home</title>

  </head>
  <style>
      input[type=text] {
  border: none;
  background-color: none;
  outline: 0;
  font-size: 18px;
  height: 30px;
}

input[type=text]:focus {
  border: none;
  background-color: none;
  outline: 0;
  height: 30px;
}

input[type=password] {
  border: none;
  background-color: none;
  outline: 0;
  font-size: 20px;
  height: 30px;
}

input[type=password]:focus {
  border: none;
  background-color: none;
  outline: 0;
  height: 30px;
}
.side{
  float:left;
  left:0px;
  right:0px;
}


  </style>
  <body>

    <div class="container">
    <h1 align = "center" style="color:red;">Zomato Home</h1>

    <br><br>
      <form action="" method="POST">
    <div align="center">
    <div class="form-group">
      <label for="uname" class="side" style="color:blue;font-size:18px;"><b>User Name :</b></label>
      <input type="text" class="side" placeholder="Enter User Name." id="uname" name="uname" required><br>
    </div>
   <!-- <small id="info" class="form-text text-muted">This name is used further to represent you.</small>-->
    <div class="form-group">
      <label for="exampleInputPassword1" class="side" style="color:blue;font-size:18px;"><b>Password :</b></label>
      <input type="password" class="side" name=pass placeholder="Enter password here." id="exampleInputPassword1" required><br>
    </div>
    <button type="submit" class="btn btn-primary" name="sub">Submit</button>
    </div>
  </form>
  <br>

  <?php
  if(isset($_POST['sub'])){
  //echo "hi";
  $conn = mysqli_connect("sql12.freemysqlhosting.net", "sql12357529", "uf3dW6yXYw", "sql12357529") or die("Not Connected");
  //$conn = mysqli_connect("localhost", "root", "", "home") or die("Not Connected");
  $u=$_POST['uname'];
  $p=$_POST['pass'];
   $sal=mysqli_query($conn, "SELECT username FROM  `register` ") or die ('Problem with query' . mysqli_error($conn));
if (mysqli_num_rows($sal)>0){
   $i=0;
   $user=[];
         while($row = $sal->fetch_assoc())
          {

            $user[$i]=$row["username"];
            $i++;
           }
}
  $us=$_POST["uname"];
  if (in_array($us, $user)){
    ?>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
      already user existes try with another username
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <?php
  } 
  else{
  $sql = mysqli_query($conn, "INSERT INTO `register` (`id`, `username`,`password`) VALUES ('', '".$u."','".$p."')");
 ?>
   <div class="alert alert-warning alert-dismissible fade show" role="alert">
    you are registered now you can login and enjoy the taste of your home.<a href="log.php">Login Here</a>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  <?php
  }
 }
 ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>
