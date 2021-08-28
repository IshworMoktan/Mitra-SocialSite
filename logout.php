<?php 

session_start();

if(isset($_SESSION['Mitra_userid']))
{
	$_SESSION['Mitra_userid'] = NULL;
	unset($_SESSION['Mitra_userid']);

}

header("Location: login.php");
die;
