<?php

function get_domeniu($cm) {
    $select = "select * from domeniu";
    $result = mysqli_query($cm, $select);
    return $result;
}

function get_competente($cm) {
    $select = "select * from competente_tehnice where id not in (1,2,3,4,5) group by denumire ";
    $result = mysqli_query($cm, $select);
    return $result;
}

function insereaza($cm, $domeniu, $competente){
//    var_dump($domeniu, $competente);
    $insert="Insert into domeniu_competente (domeniu, competenta) values ";
    foreach ($competente as $competenta) {
        $insert.="($domeniu, $competenta), ";
    }
    mysqli_query($cm, substr($insert, 0, -2)) or die('insert error '.mysqli_error($cm));
}