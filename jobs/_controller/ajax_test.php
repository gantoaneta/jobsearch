<?php
session_start();

define("PATH", realpath(dirname(__DIR__) . "/"));
if (isset($_SESSION['user']) === true) {
//    var_dump($_SESSION['user_name']);
} else if (isset($_SESSION['LAST_REQUEST_URI']) === true) {
    unset($_SESSION['LAST_REQUEST_URI']);
}
$http = '';

if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on' && $_SERVER['HTTPS'] != undefined && $_SERVER['HTTPS'] != null) {
    $http = 'https';
} else {
    $http = 'http';
}
define("ROOT_LINK", "$http://" . $_SERVER['HTTP_HOST'] . $_SERVER['CONTEXT_PREFIX'] . "/jobs/");
require_once PATH . '\_model\connection.php';
require_once PATH . '\_model\functii_test.php';
$cm = connection();

if (isset($_POST['actiune']) === true && $_POST['actiune']=='insereaza') {
    insereaza($cm, $_POST['domeniu'], $_POST['competente']);
}