<?php
session_start();
include_once("src/Google_Client.php");
include_once("src/contrib/Google_Oauth2Service.php");
######### edit details ##########
$clientId = '751760676592-kng00g0jjt3crkdp7v7hcfpfpfmd5e8k.apps.googleusercontent.com'; //Google CLIENT ID
$clientSecret = 'HSJyXB6tb8nXefPADiWXT-Wg'; //Google CLIENT SECRET
$redirectUrl = 'http://localhost/login-with-google-using-php/';  //return url (url to script)
$homeUrl = 'http://localhost/login-with-google-using-php/';  //return to home

##################################

$gClient = new Google_Client();
$gClient->setApplicationName('Login to codexworld.com');
$gClient->setClientId($clientId);
$gClient->setClientSecret($clientSecret);
$gClient->setRedirectUri($redirectUrl);

$google_oauthV2 = new Google_Oauth2Service($gClient);
?>