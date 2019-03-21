<?php
if($_SESSION['log'] == true){
    header('location: admin.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Pete Heyes - Developer Chap - Sign In Page</title>
    <meta charset="UTF-8">
</head>
<body>
<form action="admin.php" method="POST">
    Username<input type="text" name="userName">
    Password<input type="text" name="password">
    <input type="submit" name="signInSub" value="Submit">
</form>
</body>
