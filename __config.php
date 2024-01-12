<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

/**
 * 
 * Database setting
 * 
 */
if (!defined("SERVER_IS_LIVE")) {
    $serverName = $_SERVER['SERVER_NAME'];
    if ($serverName === 'localhost') {
        $serverLive = false;
    } else {
        $serverLive = true;
    }
    define("SERVER_IS_LIVE", $serverLive);
}

if (!defined('BASE_FOLDER')) {
    if (SERVER_IS_LIVE) {
        $base = "/perpetual-intercession-booking/";
    } else {
        $base = "/perpetual-intercession-booking/";
    }
    define('BASE_FOLDER', $base);
}
/**
 * Root paths and folder
 * 
 */
if (!defined("ROOT_PATH")) {
    define("ROOT_PATH", $_SERVER['DOCUMENT_ROOT'] . BASE_FOLDER);
}
if (!defined("ROOT_URL")) {
    $root_url = (!empty($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . BASE_FOLDER;
    define("ROOT_URL", $root_url);
}
if (!defined("FORM_ACTION")) {
    $root_url = ROOT_URL . 'backend/actions/';
    define("FORM_ACTION", $root_url);
}
