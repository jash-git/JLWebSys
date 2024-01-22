<?php
	include ("connection.php" ); 
	
	$user = $_POST["username"];//$user = $_REQUEST["username"];//
	$pwd = md5($_POST["password"]);//$pwd = md5($_REQUEST["password"]);//

	$sql= "SELECT username FROM ci_admin WHERE username='$user' AND userpwd='$pwd'" ; 
	$result = mysqli_query($conn ,  $sql); 

	$user = $result->fetch_row();
	if(!empty($user)){
		session_start();
		$_SESSION['user'] = $user[0];//雖然上述搜尋只有單一欄位 但是PHP會給一個陣列 所以必須指定陣列欄位才能儲存字串型態
		echo '1';
	}else{
		echo '0';
	}
?> 