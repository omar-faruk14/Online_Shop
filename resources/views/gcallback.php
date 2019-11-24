<?php
     require_once "config.php";
	if(isset($_SESSION['access_token'])){
		$gClient->setAccessToken($_SESSION['access_token']);
	}else if(isset($_GET['code'])){
		$token = $gClient->fetchAccessTokenWithAuthCode($_GET['code']);
		$_SESSION['access_token'] = $token;
	}else{
		header('Location:login.blade.php');
		exit();
	}
	
	$oAuth = new Google_Service_Oauth2($gClient);
	$userData = $oAuth->userinfo_v2_me->get();
	
	$_SESSION['email'] = $userData['email'];
	$_SESSION['givenName'] = $userData['givenName'];
	$_SESSION['id'] = $userData['id'];
	$_SESSION['picture'] = $userData['picture'];
	$_SESSION['gender'] = $userData['gender'];
	
	header('Location:profile.blade.php');
		exit();

?>
