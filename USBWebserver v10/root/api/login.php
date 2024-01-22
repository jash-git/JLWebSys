<?php
$user = $_REQUEST["user"];//$user = $_POST["user"];//
$pwd = md5($_REQUEST["pwd"]);//$pwd = md5($_POST["pwd"]);//

include ("connection.php" ); 

$sql= "SELECT username FROM ci_admin WHERE username='$user' AND userpwd='$pwd'" ; 
$result = mysqli_query($conn ,  $sql); 

$data = [];
while ($fetch=mysqli_fetch_assoc($result)){
    $data[] = $fetch;
}
print_r(json_encode($data));
?> 