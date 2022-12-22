<?php

session_start();
require_once "GoogleAPI/vendor/autoload.php";
$gClient=new Google_Client();
$gClient->setClientId("420604598489-nc0agoa7shlrv1tppjen2miqo116ijuq.apps.googleusercontent.com");
$gClient->setClientSecret("FlyIWgRovxOexI24kkFgFBP");
$gClient->setApplicationName("Home Food");
$gClient->setRedirectUri("https://home--food.000webhostapp.com/home.php");
$gClient->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");
?>
