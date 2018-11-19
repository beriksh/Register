<?php
session_start();
include 'dbh.php';
$_SESSION['cnt']=0;
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$password = md5($password);

$checkEmailsql = "SELECT email FROM week12 WHERE email = '$email'";
$resultEmail = $conn->query($checkEmailsql);
if(mysqli_num_rows($resultEmail) > 0 ) {
    echo "This email is already being used";
}
if(($_POST["password"] != $_POST["confirm_password"])){
    echo "Password wrong";
}
if(($_POST["password"] == $_POST["confirm_password"])) {
    echo "good";
    $sql = "INSERT INTO week12 (username, email, password) 
    VALUES ('$username', '$email', '$password')";
    $result = $conn->query($sql);
}
?>
</body>
</html>