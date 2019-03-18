<?php
/**
 * Created by PhpStorm.
 * User: academy
 * Date: 2019-03-18
 * Time: 12:01
 */
/**
 * creates an associative array with the id and text from the requested table
 *
 * @param $db PDO connects to the required database
 * @return array returns an assoc array with all the info requested
 */
function getAboutMeInfo (PDO $db)
:array {
    $query = $db->prepare("SELECT `id`, `paratext` from `about_me`;");
    $query->execute();
    return $query->fetchAll();
}

/**
 *loops through the array and puts the required contents into p tags with the about me class that is required on the text
 *
 * @param array $infos required arrays
 * @return string includes p tags, class and accesses the paratext from the db
 */
function printAboutMeInfo(array $infos)
: string {
    $result = '';
    foreach($infos as $info) {
        $result .= '<p class="about-me-text">' . $info['paratext'] . '</p>';
    }
    return $result;
}

?>