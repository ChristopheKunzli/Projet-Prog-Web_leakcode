<?php
/**
 * @file userIdentification.php
 * @brief file description
 * @author Created by Pablo-Fernando.ZUBIE
 * @version 02.12.2022
 */
function getUserIdentification($user){
    $userQuery = 'SELECT user_id, password FROM user WHERE username = "'.$user.'";';

    require_once 'models/dbConnector.php';
    return executeQuerySelect($userQuery);
}
function getUserData($user){
    $userQuery = 'SELECT user_id, password FROM user WHERE user_id = "'.$user.'";';

    require_once 'models/dbConnector.php';
    return executeQuerySelect($userQuery);
}