<?php 
session_start();
require_once "GoogleAPI/vendor/autoload.php";
$gClient = new Google_Client();
$gClient->setClientId("373839603860-3dankdjvm083udknk1r7bfj4l4671p2c.apps.googleusercontent.com");
$gClient->setClientSecret("lHMxtfNYgN-pPv62Vkj0RZb-");
$gClient->setApplicationName("BT Login Test");
$gClient->setRedirectUri("http://localhost/E_Commerce-/resources/views/gcallback.php");
$gClient->addScope("email");
