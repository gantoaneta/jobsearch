<?php

session_start();

define("PATH", realpath(dirname(__DIR__) . "/../"));
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
require_once PATH . '\jobs\_model\connection.php';
$cm = connection();

require_once PATH . '\jobs\_model\search.php';
if (isset($_GET['q']) === true) {
    $cauta = search_job($cm, $_GET['q']);
    $results = array();
//        die(var_dump($_GET));
    while ($array = mysqli_fetch_assoc($cauta)) {
//        if ($_GET['tip'] != 'ep') {
//            if ($array['id_apartament'] == null) {
            $detalii_anunt = $array['nume_anunt']." · ".$array['companie']." · ".$array['domeniu']." · ".$array['tip_job']." · ".$array['abreviere_judet'];
//            } else {
//                $detalii_apartament = $array['nume'] . ' · ' . $array['strada'] . ', nr. ' . $array['nr_artera']
//                        . ', bl. ' . $array['imobil'] . ', sc. ' . $array['scara']
//                        . ', ap. ' . $array['apartament'];
//            }
            $results ['items'][] = array(
                'category' => 'category',
                'nume_anunt' => $detalii_anunt,
                'descriere_anunt' => $array['descriere_anunt'],
                'companie' => $array['companie'],
                'judet' => $array['judet'],
                'abreviere_judet' => $array['abreviere_judet'],
                'domeniu' => $array['domeniu'],
                'tip_job' => $array['tip_job'],
            );
//        } else {
//            $detalii_apartament = $array['nume'] . ' · ' . $array['email'];
//
//            $results ['items'][] = array(
//                'category' => $array['category'],
//                'denumire' => $detalii_apartament,
//                'id_apartament_ep' => $array['id_apartament'],
//                'id_asociatie' => $array['id_asociatie'],
//                'id_scara' => $array['id_scara'],
//                'id_pf' => $array['id_pf'],
//                'id_pj' => $array['id_pj'],
//                'id_ep' => $array['id_ep']
//            );
//        }
    }

    echo json_encode($results);
} else if ((isset($_GET['id_pf']) == true || isset($_GET['id_pj']) == true || isset($_GET['id_ep']) == true) &&
        ($_GET['id_pf'] != '' || $_GET['id_pj'] != '' || $_GET['id_ep'] != '')) {
    $cauta = Eproprietar::search_persoane($cm, '', '', $_GET['id_pf'], $_GET['id_pf'], $_GET['id_ep']);
    $result = array();
    while ($array = mysqli_fetch_assoc($cauta)) {
        $detalii_apartament = $array['nume'] . ' · ' . $array['email'];
    }
    echo $detalii_apartament;
}