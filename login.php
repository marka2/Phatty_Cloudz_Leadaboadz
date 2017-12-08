<?php include('connect.php'); ?>

<?php

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM `users` WHERE `userName` = '".$username."' AND `password` = '".$password."' LIMIT 1 ";

echo $sql;
$result = mysql_query($sql, $conn);

if($result) {
    echo "Yay login info is correct";
}
?>

<html>
    <form id="create" action="login.php" method="POST">
Username: <input type="text" id="username" name="username"><br>
Password: <input type="text" id="password" name="password"><br>
<input type="submit" name="Login">
</form>
</html>