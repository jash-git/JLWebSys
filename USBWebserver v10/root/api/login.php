<?php
	include ("connection.php" ); 
	
	$user = $_REQUEST["username"];//$user = $_POST["username"];//
	$pwd = md5($_REQUEST["password"]);//$pwd = md5($_POST["password"]);//

	$sql= "SELECT username FROM ci_admin WHERE username='$user' AND userpwd='$pwd'" ; 
	$result = mysqli_query($conn ,  $sql); 

	$user = $result->fetch_row();
	if(!empty($user)){
	    session_start();
		$_SESSION['user'] = $user;
		echo '1';
	}else{
		echo '0';
	}
?> 