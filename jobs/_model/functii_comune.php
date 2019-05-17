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