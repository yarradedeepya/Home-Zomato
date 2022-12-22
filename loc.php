<!DOCTYPE html>
<html>
<body onload="getLocation()">
<p id="lat"></p>
<p id="lng"></p>

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
    y.innerHTML="Longitude: " + position.coords.longitude;
}
</script>

</body>
</html>
