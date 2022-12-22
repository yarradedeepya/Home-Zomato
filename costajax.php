<?php
 $conn = mysqli_connect("sql12.freemysqlhosting.net", "sql12357529", "uf3dW6yXYw", "sql12357529") or die("Not Connected");
$kitna=$_POST["kitna"];
$sl= mysqli_query($conn, "SELECT quantity FROM `kitquant` where name='$kitna' ") or die("Not NOT Connected");
if (mysqli_num_rows($sl)>0){
   $i=0;
   $q=[];
           while($row = $sl->fetch_assoc())
            {
              $q[$i]=$row["quantity"];
              $i++;
             }
        }
        echo "Quantity available $q[0]";
?>
