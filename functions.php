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
function getAboutMeInfo (PDO $db) : array {
    $query = $db->prepare("SELECT `id`, `paratext` from `about_me` WHERE `deleted` = '0';");
    $query->execute();
    return $query->fetchAll();
}

/**
 *loops through the array and puts the required contents into p tags with the about me class that is required on the text
 *
 * @param array $infos required arrays
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
 * @param $postdata array that is required to be passed to the db
 */
function addAboutMetoDB (PDO $db, string $postdata) : void{
    $query = $db->prepare("INSERT INTO `about_me` (`paratext`) VALUES (:text)");
    $query->bindParam(':text', $postdata);
    $query->execute();
}

?>