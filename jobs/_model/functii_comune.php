<?php

function select_domeniu($cm) {
    $sql = "select * from domeniu";
    $result = mysqli_query($cm, $sql);
    return $result;
}

function select_judet($cm) {
    $sql = "select * from judet";
    $result = mysqli_query($cm, $sql);
    return $result;
}

function select_localitate($cm, $id_judet) {
    $sql = "select * from localitate where id_judet=$id_judet";
    $result = mysqli_query($cm, $sql);
    return $result;
}