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
          padding: 10px 25px;
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

        .first-r  { left: 100%; position: relative; }
        .second-r { left: 100%; position: relative; }
        .third-r  { left: 100%; position: relative; }
        .third-r  { left: 100%; position: relative; }

        .form-popup {
display: none;
position: fixed;
height: 80%;
bottom: 0;
right: 1%;
left:1%;
border: 3px solid #f1f1f1;
z-index:50;
}
.form-container {
  height: 100%;
  width: 100%;
  max-width: 100%;
  padding: 10px;
  background-color:white;
}

/* Full-width input fields */


/* Set a style for the submit/login button */
.form-container .btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}

       .vertical {
           border-left: 6px gray;
           height: 100%;
           position:absolute;
           left: 40%;
       }

       .vertical-menu {
  width: 40%;
}

.vertical-menu a {
  height: 20%;
  background-color: #eee;
  color: black;
  display: block;
  padding: 12px;
  text-decoration: none;
}

.vertical-menu a:hover {
  background-color: #ccc;
}

.vertical-menu a.active {
  background-color: #4CAF50;
  color: white;
}

.form-container .left-col{
float:left;
width:50%;
margin:10%,0;
}
.form-container .right-col {
float:left;
width:50%;
margin:10%,0;
}
.paragraph {
    display:inline-block;
    float:right;
}
.side{
  float:left;
  left:0px;
  right:0px;
}


  </style>
    <body onload="getLocation()">
      <div id="demo1"></div>
      <a href=loc.php><img class="side" width=50 height=50 src="location.png"></a>
      <br>
      <p class="side" id="lat"></p>
      <p class="side" id="lng"></p>
      <br>
      <hr style="width:50%;text-align:left;margin-left:0">
      
      <div class="form-group has-success has-feedback">
        <div class="col-sm-10">
       <input class="input-field form-control form-control-lg form-control-borderless glossyBtn" type="search" id="filter" placeholder="     Search for Homes..."  onkeyup="myFunction()"></input>
     </div>
     </div>
     <div align="center">
      <iframe src="frame1.php" width="100%" height="50" frameBorder="0" ></iframe>
    </div>
     <hr>
     <div align="center">
    <iframe src="frame2.php" id="frame2" width=100% height=63% scrolling="auto" frameBorder="0" ></iframe>
    </div>
  <!--  <nav class="navbar navbar-expand-lg navbar-light bg-light">

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">

        <li class="nav-item">
        <a class="nav-link second-r" href="home.php">Order</a>
      </li>

        <li class="nav-item">
        <a class="nav-link third-r" href="profile.php" target="_self">Profile</a>
      </li>
    </ul>
  </div>
</nav>-->
<div class="form-popup" id="myForm">
<form action=" " class="form-container">
    <h2 class="paragraph" onclick="closeForm()">X</h2>
    <h2>Sort and Filters</h2>
    <br>
    <hr>
<div class="left-col vertical-menu">
<a href="sort.php" target="frame3.php">Sort By</a><br>
<a href="rat.php" target="frame3.php">Rating</a><br>
<a href="cost.php"  target="frame3.php">Cost per Person</a><br>
</div>
<div class="right-col ">
<iframe src="frame3.php" id="frame3" name="frame3.php" width="100%" height="100%" scrolling="no" frameBorder=0></iframe>
</div>
  </form>
</div>

<script>

var x = document.getElementById("lat");
var y=document.getElementById("lng");

function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.watchPosition(showPosition);
  } else {
    x.innerHTML = "Geolocation is not supported by this browser.";
  }
}

function showPosition(position) {
    x.innerHTML="Latitude: " + position.coords.latitude
    y.innerHTML=",Longitude: " + position.coords.longitude;
}


function myFunction() {
  var iframe = document.getElementById("frame2");
  var cardtitle=iframe.contentWindow.document.getElementsByClassName("card-title");
  var form=iframe.contentWindow.document.getElementsByTagName("form");
  var inp=document.getElementById("filter").value.toUpperCase();
  //var txt=iframe.contentWindow.document.getElementById(inp);
    for(i = 0; i < cardtitle.length; i++) {

    //var elmnt = iframe.contentWindow.document.getElementsByTagName("div")[i];
    //var elmntval=elmnt.getAttribute('name');
    var elmntval=cardtitle[i].getAttribute('name');
    if(elmntval.indexOf(inp)< 0)
    {
        form[i].style.display = "none";
       document.getElementById("demo1").innerHTML="i";
   }
 }
}



function mysortFunction() {
var lat2=document.getElementById("lan");
var lon2=document.getElementById("lng");
var iframe= document.getElementById("frame3");
//var myForm=document.getElementById("myForm");
var ele = iframe.contentWindow.document.getElementsByName("defaultExampleRadios");
          for(i = 0; i < ele.length; i++) {
                if(ele[i].checked)
                {
                    //document.getElementById("demo").innerHTML=ele[i].value;
                    var val=ele[i].value;
                }
            }
var b="Cost:Low To High";
var c="Cost:High To Low";
var d="Popularity";
var e="Rating:High To Low";
var f="Delivery Time";
var ans=val.localeCompare(b);
var an=val.localeCompare(c);
var and=val.localeCompare(d);
var ane=val.localeCompare(e);
var anf=val.localeCompare(f);
var iframe = document.getElementById("frame2");
var cards=iframe.contentWindow.document.getElementsByClassName("card-deck");
var card=iframe.contentWindow.document.getElementsByClassName("card");
var cost=iframe.contentWindow.document.getElementById("cost");
var pop=iframe.contentWindow.document.getElementById("pop");
var rate=iframe.contentWindow.document.getElementById("rate");
var form=iframe.contentWindow.document.getElementsByTagName("form");
var lat1=iframe.contentWindow.document.getElementsByTagName("lat");
var lon1=iframe.contentWindow.document.getElementsByTagName("lng");
//linebreak =iframe.contentWindow.document.createElement("br");
if(an == 0){

  $(form).sort(function(a,b) {

          return $(a).find(cost) < $(b).find(cost) ? 1 : -1;
      }).appendTo(cards);
}

if(ans == 0){
  //document.getElementById("demo1").innerHTML="i";
  $(form).sort(function(a,b) {
          return $(a).find(cost) > $(b).find(cost) ? 1 : -1;
      }).appendTo(cards);
}

if(and==0){
    $(form).sort(function(a,b) {
            return $(a).find(pop) > $(b).find(pop) ? 1 : -1;
        }).appendTo(cards);
}
if(ane==0){
  document.getElementById("demo1").innerHTML="i";
  $(form).sort(function(a,b) {
          return $(a).find(rate) > $(b).find(rate) ? 1 : -1;
      }).appendTo(cards);

}
if(anf==0){
  document.getElementById("demo1").innerHTML="i";
  var dis=[];
  $(form).sort(function distance(lat1, lon1, lat2, lon2) {
  	if ((lat1 == lat2) && (lon1 == lon2)) {
  		return 0;
  	}
  	else {
  		var radlat1 = Math.PI * lat1/180;
  		var radlat2 = Math.PI * lat2/180;
  		var theta = lon1-lon2;
  		var radtheta = Math.PI * theta/180;
  		var dist = Math.sin(radlat1) * Math.sin(radlat2) + Math.cos(radlat1) * Math.cos(radlat2) * Math.cos(radtheta);
  		if (dist > 1) {
  			dist = 1;
  		}
  		dist = Math.acos(dist);
  		dist = dist * 180/Math.PI;
  		dist = dist * 60 * 1.1515;
  		dist = dist * 1.609344 ;
  		//if (unit=="N") { dist = dist * 0.8684 }
      document.getElementById("demo1").innerHTML=dist;
  		return dist;
  	}
  }).appendTo(dis);
  //document.getElementById("demo1").innerHTML=dis[0];


}

}

function myratFunction(){
  var iframe = document.getElementById("frame2");
  var cardrate=iframe.contentWindow.document.getElementsByName("rate");
  var form=iframe.contentWindow.document.getElementsByTagName("form");
  var iframe= document.getElementById("frame3");
  var bub=iframe.contentWindow.document.getElementsByClassName("bubble");





    for(i = 0; i < bub.length; i++) {
            var elmntval=bub[i].value;

        }

        for(i = 0; i < cardrate.length; i++) {


        var elmnt=cardrate[i].value;


        if(elmntval>elmnt)
        {
            form[i].style.display = "none";

       }
      }


}

function mycostFunction(){
 
  var iframe = document.getElementById("frame2");
  var cardcost=iframe.contentWindow.document.getElementsByName("cost");
  var form=iframe.contentWindow.document.getElementsByTagName("form");
  var iframe= document.getElementById("frame3");
  var inp1=iframe.contentWindow.document.getElementsByName("inp1");
  var inp2=iframe.contentWindow.document.getElementsByName("inp2");
  for(i = 0; i < inp1.length; i++) {
          var elmntval1=inp1[i].value;

      }
  for(i = 0; i < inp2.length; i++) {
              var elmntval2=inp2[i].value;
          }
 
          for(i = 0; i < cardcost.length; i++) {
          var elmnt=cardcost[i].value;
          if(elmntval1>elmnt || elmntval2<elmnt)
          {
              //document.getElementById("demo1").innerHTML="i";
              form[i].style.display = "none";
          }
          }

}

function myrateFunction(){
  var iframe = document.getElementById("frame2");
  var cardrate=iframe.contentWindow.document.getElementsByName("rate");
  var form=iframe.contentWindow.document.getElementsByTagName("form");
  var elmntval=4.5;
        for(i = 0; i < cardrate.length; i++) {


        var elmnt=cardrate[i].value;


        if(elmntval>elmnt)
        {
            form[i].style.display = "none";

       }
      }


}

function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}

</script>


      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
      </body>
      </html>
