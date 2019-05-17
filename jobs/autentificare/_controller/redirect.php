<?php

//define("PATH", realpath(str_replace('\\', '/', realpath("../"))));
//die(var_dump('Location: ' . ROOT_LINK . 'autentificare'));s

//function redirect($url) {
if (isset($_SESSION['user']) === false) {
    $_SESSION['LAST_REQUEST_URI'] = $_SERVER['REQUEST_URI'];
//    die($_SESSION['LAST_REQUEST_URI']);
    header('Location: ' . ROOT_LINK . 'autentificare');
    exit();
}

if (isset($_SESSION['user']) === true && isset($_SESSION['LAST_REQUEST_URI']) === true
) {
    $_SERVER['REQUEST_URI'] = $_SESSION['LAST_REQUEST_URI'];

    unset($_SESSION['LAST_REQUEST_URI']);
}
//}
