<?php

require_once 'functions.php';
require_once 'dbConnectPortfolio.php';

$db = getDbConnection();
session_start();

if($_SESSION['log'] == true){
    header('location: admin.php');
}

if (isset($_POST['userName'])) {
    $dbInformation = getCreds($db);
    $dbUsername = $dbInformation[0]['username'];
    $dbPassword = $dbInformation[0]['password'];
    $givenUser = $_POST['userName'];
    $givenPassword = $_POST['password'];
    $signInResult = signIn($givenUser, $givenPassword, $dbUsername, $dbPassword);
    if ($signInResult) {
        $_SESSION['log'] = true;
        header('location: admin.php');
    } else {
        header('location: signin.php');
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Pete Heyes - Developer Chap - Sign In Page</title>
    <meta charset="UTF-8">
</head>
<body>
<form action="signin.php" method="POST">
    Username<input type="text" name="userName">
    Password<input type="text" name="password">
    <input type="submit" name="signInSub" value="Submit">
</form>
</body>
