<?php
	/*session_start();	
	if(!isset($_SESSION["username"]) && !isset($_SESSION["usertype"]) && !isset($_SESSION["accesslevel"])){	
		header("Location: login.php");
		exit(); 
	}
	*/
	
	include('db.php');
	session_start();
   
	$user_check = $_SESSION['login_user'];
   
	$ses_sql = mysqli_query($link,"select UserName from users where UserName = '$user_check' ");
   
	$row = mysqli_fetch_array($ses_sql, MYSQLI_ASSOC);
   
	$login_session = $row['UserName'];
   
	if(!isset($_SESSION['login_user'])){
		header("location:login.php");
		die();
	}
?>