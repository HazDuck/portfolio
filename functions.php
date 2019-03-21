<?php

/**
 * creates an associative array with the id and text from the requested table
 *
 * @param $db PDO connects to the required database
 *
 * @return array returns an assoc array with all the info requested
 */
function getAboutMeInfo (PDO $db) : array {
    $query = $db->prepare("SELECT `id`, `paratext` from `about_me` WHERE `deleted` = '0';");
    $query->execute();
    return $query->fetchAll();
}

/**
 *loops through the array and puts the required contents into p tags with the about me class that is required on the text
 *
 * @param array $infos required arrays
 *
 * @return string includes p tags, class and accesses the paratext from the db
 */
function printAboutMeInfo(array $infos) : string {
    $result = '';
    foreach($infos as $info) {
        if (is_string($info['paratext']) && array_key_exists('paratext', $info)){
            $result .= '<p class="about-me-text">' . $info['paratext'] . '</p>';
        } else {
            $result .= '';
        }
    }
    return $result;
}

/**
 * inserts provided string into about me table
 *
 * @param PDO $db PDO connects to the required database
 *
 * @param $postdata array that is required to be passed to the db
 */
function addAboutMetoDB (PDO $db, string $newAboutMeInput) : bool {
    $query = $db->prepare("INSERT INTO `about_me` (`paratext`) VALUES (:text)");
    $query->bindParam(':text', $newAboutMeInput);
    return $query->execute();
}

/**
 * takes an array and loops through extracting the first 20 characters of each text input. It then populates them into a dropdown list.
 *
 * @param $infos array of db information
 *
 * @return string returns a string that can be printed to show a drop down option or options.
 */
function fillEditDropDown (array $infos) :string {
    $result = '';
    foreach($infos as $info) {
        $intro = substr($info['paratext'], 0, 40);
        $result .= '<option value=' . $info['id'] . '>' . $intro . '</option>';
    }
    return $result;
}

/**
 *retrieves one result from a db where the id matches the id provided
 *
 * @param PDO $db connection to db
 *
 * @param $dbEntryId string id and text values to retrieve from db
 *
 * @return array returns an array of the information required
 */
function getChosenTextToEdit (PDO $db, string $dbEntryId) : array {
    $query = $db->prepare("SELECT `id`, `paratext` from `about_me` WHERE `id` = '$dbEntryId';");
    $query->execute();
    return $query->fetch();
}

/**
 * access the value of paratext from any array passed to it
 *
 * @param $arr array including a paratext key and value
 *
 * @return string contained in the value of the paratext key
 */
function retrieveTextFromArray (array $arr) : string {
    if(empty($arr['paratext'])) {
        return 'cannot be empty';
    } else {
        return $arr['paratext'];
    }
}

/**
 * updates the paratext field of the about me table of the provided db
 *
 * @param PDO $db PDO connects to the required database
 *
 * @param string $postdata provided
 *
 * @param $id
 */
function editAboutMe (PDO $db, $postdata, string $id) : void {
    $query = $db->prepare("UPDATE `about_me` SET `paratext` = :text WHERE `id` = '$id';");
    $query->bindParam(':text', $postdata);
    $query->execute();
}

/**
 * takes a string and returns false if it is empty and true if it has text
 *
 * @param string $string string to test if empty
 *
 * @return bool true or false if empty or not
 */
function checkIfEmpty (string $string) : bool {
    if (empty($string)) {
        $hasGotText = false;
    } else {
        $hasGotText = true;
    }
    return $hasGotText;
}

/**
 *trims white space if present
 *
 * @param string $string to be trimmed
 *
 * @return string trimmed string
 */
function trimWhiteSpace (string $string) : string {
    return trim($string);
}

/**
 *returns a string to display a submit edits button
 *
 * @return string inputs for a button called Edit
 */
function showButton () : string {
    return '<input type="submit" name="editSub" value="Edit" >';
}

/**
 *provides a success or failure message based on a boolean
 *
 * @param bool based on if a db upload is successful
 *
 * @return string success or failure message
 */
function successMessage (bool $successfulUpload) : string {
    if ($successfulUpload) {
        return 'Yup- successfully added';
    } else {
        return 'Nope- not successfully uploaded';
    }
}

/**
 * updates the delete field of the about me table of the provided db to 1
 *
 * @param PDO $db PDO connects to the required database
 *
 * @param $id string value of id in the table
 *
 * @return void
 */
function deleteAboutMeText (PDO $db, string $id) : void {
    $query = $db->prepare("UPDATE `about_me` SET `deleted` = '1' WHERE `id` = '$id';");
    $query->execute();
}

?>