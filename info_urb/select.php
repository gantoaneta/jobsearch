<?php

require __DIR__ . "/connection.php";
//
$conn = connection();
if (isset($_GET['query']) == true) {
    $sql = "SELECT concat(nume, ' ', prenume) persoana 
                FROM persoana_fizica pf 
                INNER JOIN apartament ap ON pf.id=ap.id_proprietar_pf 
                HAVING persoana like '%" . $_GET['query'] . "%' 
                ORDER BY pf.id";
    $result = mysqli_query($conn, $sql);
    $results = array();
    while ($array = mysqli_fetch_assoc($result)) {

        
//        foreach ($array as $persoana) {
            $results['items'][] = array(
                'pers' => $array['persoana']
            );
//        }
    }
    echo json_encode($results);
//        echo $sql;
    //echo array de tip json
}

