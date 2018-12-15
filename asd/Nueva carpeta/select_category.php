<?php

include_once '../../../_model/conexiune_mysqli.php';
//
$conn = conexiune_mysql();
if (isset($_GET['a']) == true) {
//    $sql = "SELECT pj.denumire AS nume,
//            'Persoana juridica' as category 
//            FROM apartament ap
//            INNER JOIN persoana_juridica pj ON pj.id = ap.id_proprietar_pj
//            WHERE pj.denumire like '%".$_GET['a']."%'
//            UNION
//            SELECT concat(pf.nume, ' ', pf.prenume) AS nume, 
//            'Persoana fizica' as category FROM apartament ap
//            INNER JOIN persoana_fizica pf ON pf.id = ap.id_proprietar_pf
//            HAVING nume like '%".$_GET['a']."%'
//            ORDER BY nume";
    
    $sql ="SELECT 
            CASE WHEN pf.nume IS NOT NULL 
                THEN CONCAT( pf.nume,  ' ', pf.prenume ) 
                ELSE CONCAT( pj.denumire,  ' ', pj.tip ) 
	    END nume,
                CASE WHEN pf.nume IS NOT NULL 
                THEN 'PERSOANĂ FIZICĂ' 
                ELSE 'PERSOANĂ JURIDICĂ'
	    END category
           FROM apartament ap 
           LEFT JOIN persoana_fizica pf ON pf.id = ap.id_proprietar_pf
           LEFT JOIN persoana_juridica pj ON pj.id = ap.id_proprietar_pj
           HAVING nume like '%".$_GET['a']."%' 
           ORDER BY nume";

    $result = mysqli_query($conn, $sql);
    $results = array();
    while ($array = mysqli_fetch_assoc($result)) {
        $results['items'][] = array(
                    'category' => $array['category'],
                    'nume' => $array['nume']
                    
        );
    }
    
//        var_dump($results);
//        echo ($sql);
        echo json_encode($results);
    
}