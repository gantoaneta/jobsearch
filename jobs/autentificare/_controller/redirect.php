<?php
session_start();
var_dump($_SESSION);
if (isset($_SESSION['user']) === false) {
    $_SESSION['LAST_REQUEST_URI'] = $_SERVER['REQUEST_URI'];
    header('Location: ' . ROOT_LINK . 'autentificare/?link=login');
    exit();
}

if (isset($_SESSION['user']) === true && isset($_SESSION['LAST_REQUEST_URI']) === true
) {
    $_SERVER['REQUEST_URI'] = $_SESSION['LAST_REQUEST_URI'];

    unset($_SESSION['LAST_REQUEST_URI']);
}
