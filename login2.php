<?php
session_start();
include 'dbh.php';

$email = $_POST['email2'];
$password = $_POST['password2'];
$password = md5($password);

$sql = "SELECT * FROM week12 WHERE email='$email' AND  password =  '$password' ";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
// print_r ($row);
if(!$row){
	echo "wrong";
	$_SESSION['cnt']++;
	if($_SESSION['cnt']>=3){
		$sql = "DELETE FROM week12 WHERE email='$email'";
		$result = $conn->query($sql);
		echo "block";
	}
}
else{
	// $_SESSION['id'] = $row['id'];
	// $_SESSION['name'] = $row['username'];
	echo "success";
	$_SESSION['cnt'] = 0;
}

?>