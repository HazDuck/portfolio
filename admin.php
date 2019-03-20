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

if(isset($_POST['addSub'])) {
    $dataFromAdd = $_POST['add'];
    $okToSend= checkIfEmpty($dataFromAdd);
    if ($okToSend) {
        $trimmedText = trimWhiteSpace($dataFromAdd);
        addAboutMetoDB($db, $trimmedText);
        header('Location: admin.php');
    }
}

if(isset($_POST['chooseSub'])) {
    $dropdownID = $_POST['editDropdown'];
    $dropDownSelectionFullArray = getChosenTextToEdit($db, $dropdownID);
    $dropDownSelectionText = retrieveTextFromArray($dropDownSelectionFullArray);
}

if(isset($_POST['editSub'])) {
    $textFromEdit = $_POST['edit'];
    $idFromEdit = $_POST['editId'];
    $okToEdit= checkIfEmpty($textFromEdit);
    if ($okToEdit) {
        $trimmedTextEdit = trimWhiteSpace($textFromEdit);
        editAboutMe($db, $trimmedTextEdit, $idFromEdit);
        header('Location: admin.php');
    }
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
            <p>Add:</p>
        <form action='admin.php' method="post" id="addForm">
            <textarea name="add" type="text" rows="5" cols="50" form="addForm"></textarea>
            <input type="submit" name="addSub" value="Add" >
        </form>
            <p>Edit:</p>
        <form action="admin.php" method="post" id="editDropDownForm">
            <select name="editDropdown">
                <?php echo $dropdownContents; ?>
            </select>
            <input type="submit" name="chooseSub" value="Choose" >
        </form>

        <form action="admin.php" method="post" id="editForm">
            <textarea name="edit" type="text" rows="5" cols="50" form="editForm">
<?php echo $dropDownSelectionText ?>
            </textarea>
            <?php
            if (isset($dropdownID)) {
                echo "<input type= 'hidden' value=" . $dropdownID . " name='editId'>";
            }
            ?>
            <input type="submit" name="editSub" value="Edit" >
        </form>
            <p>Delete:</p>
        <form action="admin.php" method="post" id="deleteDropDownForm">
            <select></select>
            <input type="submit" name="deleteSub" value="Delete" >
        </form>
<h4><a href="">Back to page--></a></h4>
</body>