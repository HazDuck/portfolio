<?php
/**
 * Created by PhpStorm.
 * User: academy
 * Date: 2019-03-18
 * Time: 10:05
 */
require_once 'functions.php';
require_once 'dbConnectPortfolio.php';

$db = getDbConnection();
$pullFromDatabase = getAboutMeInfo($db);
$dropdownContents = fillEditDropDown($pullFromDatabase);

if(isset($_POST['add'])) {
    $dataFromAdd = $_POST['add'];
    addAboutMetoDB($db, $dataFromAdd);
}

if(isset($_POST['chooseSub'])) {
    $dropdownID = $_POST['editDropdown'];
    $dropDownSelectionFullArray = getChosenTextToEdit($db, $dropdownID);
    $dropDownSelectionText = retrieveTextFromArray($dropDownSelectionFullArray);
}

if(isset($_POST['editSub'])) {
    $textFromEdit = $_POST['edit'];
    $idFromEdit = $_POST['editDropdown'];
    editAboutMe($db, $textFromEdit, $idFromEdit);
    header('Location: admin.php');

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Pete Heyes - Developer Chap - Admin Page</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/normalize.css"/>
    <link rel="stylesheet" href="css/adminStyle.css"/>
</head>
<body>
    <h4>Howdy Pedro</h4>
        <form action='admin.php' method="post">
            <p>Add:</p>
            <textarea name="add" type="text" rows="5" cols="50"></textarea>
            <input type="submit" name="addSub" value="Add" >

            <p>Edit:</p>
            <select name="editDropdown">
                <?php echo $dropdownContents; ?>
            </select>
            <input type="submit" name="chooseSub" value="Choose" >

            <textarea name="edit" type="text" rows="5" cols="50"><?php echo $dropDownSelectionText ?></textarea>
            <input type="submit" name="editSub" value="Edit" >
            <p>Delete:</p>
            <select></select>
            <input type="submit" name="deleteSub" value="Delete" >
        </form>
<h4><a href="">Back to page--></a></h4>
</body>