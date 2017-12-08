<?php include('connect.php'); ?>

<?

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "INSERT INTO `users` (userName, password) VALUES ('".$username."', '".$password."')";

$result = mysql_query($sql, $conn);

?>
<html>
    <form id="create" action="sign-up.php" method="POST">
Username: <input type="text" id="username" name="username"><br>
Password: <input type="text" id="password" name="password"><br>
<input type="submit" name="Signup">
</form>
</html>