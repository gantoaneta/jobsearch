<?php
require_once __DIR__ . '/../_model/connection.php';
require_once __DIR__ . '/functii.php';
require_once __DIR__ . '/../_model/select.php';

$conn = connection();

if (isset($_GET['actiune'])==true && $_GET['actiune'] == 'atribute'){
//    try{
        $fct =fct::cauta($conn, '', $_GET['id']);
        echo fct::json($fct);
//    } catch (Exception $ex) {
//        echo $ec -> getMessage();
//    }
}
else if (isset($_GET['persoana']) == true && $_GET['persoana'] != "") {
    try{
        $fct = fct::cauta($conn, $_GET['persoana'],'');
        echo fct::sugestii_cautare($fct);
    } catch (Exception $ex) {
        echo $ex -> getMessage();
    }
}
