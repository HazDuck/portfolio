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

if(isset($_POST['addSub'])) {
    $dataFromAdd = $_POST['add'];
    $trimmedText = trimWhiteSpace($dataFromAdd);
    $okToSend= checkIfEmpty($trimmedText);
    $successOrFail = successMessage($okToSend);
    if ($okToSend) {
        $successfulUpload = addAboutMetoDB($db, $trimmedText);
        $successOrFail = successMessage($successfulUpload);
    }
}

if(isset($_POST['chooseSub'])) {
    $dropdownID = $_POST['editDropdown'];
    $dropDownSelectionFullArray = getChosenTextToEdit($db, $dropdownID);
    $dropDownSelectionText = retrieveTextFromArray($dropDownSelectionFullArray);
    $showEditButton = showButton();
}

if(isset($_POST['editSub'])) {
    $textFromEdit = $_POST['edit'];
    $idFromEdit = $_POST['editId'];
    $trimmedTextEdit = trimWhiteSpace($textFromEdit);
    $okToEdit = checkIfEmpty($trimmedTextEdit);
    if ($okToEdit) {
        editAboutMe($db, $trimmedTextEdit, $idFromEdit);
    }
}

if(isset($_POST['deleteSub'])) {
    $deleteDropdownID = $_POST['deleteDropdown'];
    deleteAboutMeText($db, $deleteDropdownID);
}

$pullFromDatabase = getAboutMeInfo($db);
$dropdownContents = fillEditDropDown($pullFromDatabase);

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
            <p>Add:</p>
        <form action='admin.php' method="POST" id="addForm">
            <textarea name="add" type="text" rows="5" cols="50" form="addForm"></textarea>
            <input type="submit" name="addSub" value="Add" >
            <?php if (isset($successOrFail)) {
                echo $successOrFail;
            } ?>
        </form>
            <p>Edit:</p>
        <form action="admin.php" method="POST" id="editDropDownForm">
            <select name="editDropdown">
                <?php
                if (isset($dropdownContents)) {
                    echo $dropdownContents;
                } ?>
            </select>
            <input type="submit" name="chooseSub" value="Choose" >
        </form>
        <form action="admin.php" method="POST" id="editForm">
            <textarea name="edit" type="text" rows="5" cols="50" form="editForm"><?php echo $dropDownSelectionText ?></textarea>
            <?php if (isset($dropdownID)) {
                echo "<input type= 'hidden' value=" . $dropdownID . " name='editId'>";
            }
            if (isset($showEditButton)) {
                echo $showEditButton;
            }
            ?>
        </form>
            <p>Delete:</p>
        <form action="admin.php" method="POST" id="deleteDropDownForm">
            <select name="deleteDropdown">
                <?php if (isset($dropdownContents)) {
            echo $dropdownContents;
            } ?>
            </select>
            <input type="submit" name="deleteSub" value="Delete" >
        </form>
<h4><a href="index.php">Back to page--></a></h4>
</body>