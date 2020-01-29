<?php
session_start();

define("PATH", realpath(dirname(__DIR__) . "../../"));

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
//die(PATH);
require_once PATH . '\_model\connection.php';
$cm = connection();


require_once PATH . '\autentificare\_model\functii_login.php';

if (isset($_POST['actiune']) && $_POST['actiune'] == 'register_candidat') {
    $_POST['password'] = md5($_POST['password']);
    $_POST['password2'] = md5($_POST['password2']);
    $data = explode(" ", $_POST['data']);

    switch ($data[1]) {
        case "Ianuarie":
            $data[1] = "01";
            break;
        case "Februarie":
            $data[1] = "02";
            break;
        case "Martie":
            $data[1] = "03";
            break;
        case "Aprilie":
            $data[1] = "04";
            break;
        case "Mai":
            $data[1] = "05";
            break;
        case "Iunie":
            $data[1] = "06";
            break;
        case "Iulie":
            $data[1] = "07";
            break;
        case "August":
            $data[1] = "08";
            break;
        case "Septembrie":
            $data[1] = "09";
            break;
        case "Octombrie":
            $data[1] = "10";
            break;
        case "Noiembrie":
            $data[1] = "11";
            break;
        case "Decembrie":
            $data[1] = "12";
            break;
    }

    $nume = $_POST['nume'];
    $prenume = $_POST['prenume'];
    $email = $_POST['email'];
    $dataS = $data[2] . "-" . $data[1] . "-" . $data[0];
    $username = $_POST['username'];
    $parola = $_POST['password'];
    $abv_judet = $_POST['judet'];

    var_dump($nume, $prenume, $email, $dataS, $username, $parola, $abv_judet);
    insert_candidat($cm, $nume, $prenume, $email, $dataS, $username, $parola, $abv_judet);
} else if (isset($_POST['actiune']) && $_POST['actiune'] == 'login') {
    $username = $_POST['username'];
    $parola = $_POST['password'];
    $cont_r = check_cont($cm, $username, $parola);
    $row_cont= mysqli_num_rows($cont_r);
    if ($row_cont == 0) {
        $return = "<div class='ui pointing red basic fluid label' id='error'>
                                        Nu există combinația username/parola.
                                                </div>";
    } else {
        $return = '';
        while ($arr = mysqli_fetch_array($cont_r)) {
            $_SESSION['uid'] = $arr['uid'];
            $_SESSION['user'] = $arr['username'];
            $_SESSION['tip'] = $arr['id'];
        }
        var_dump($_SESSION);
    }
        echo $return;
} else {
    var_dump('eroare', $_POST);
}    