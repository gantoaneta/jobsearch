<?php

function search_job($cm, $where = '', $tip = '', $id_pf = '', $id_pj = '', $id_ep = '') {
//die(var_dump( $tip == 'ep', $tip == 'ep' || $tip == '', $tip == ''));
    $where = mysqli_real_escape_string($cm, $where);
    $with = array(
        "ă",
        "î",
        "ș",
        "â",
        "ț",
        "Ă",
        "Î",
        "Ș",
        "Â",
        "Ț",
        " ·",
        "nr. ",
        "bl. ",
        "sc. ",
        "ap. ",
        ","
    );
    $replace = array(
        "a",
        "i",
        "s",
        "a",
        "t",
        "a",
        "i",
        "s",
        "a",
        "t",
        "",
        "",
        "",
        "",
        "",
        "",
    );

    $where = str_replace($with, $replace, $where);

    $sql = "SELECT a.denumire nume_anunt, a.descriere descriere_anunt, c.denumire companie, 
        jud.nume judet, jud.abreviere abreviere_judet, d.domeniu domeniu, tj.tip_job tip_job
        FROM `anunt` a 
        inner JOIN companie c on c.id=a.id_companie
        inner join judet jud on jud.id=a.id_judet
        inner join domeniu d on d.id=a.id_domeniu
        inner join tip_job tj on tj.id=a.id_tip_job";

    if ($where != '') {
        $cuvinte = preg_split('/[ ]/', $where);
        $whereClause = '';
        foreach ($cuvinte as $word) {
            $whereClause .= " (";
                $whereClause .= "
                        REPLACE( REPLACE( REPLACE( REPLACE( REPLACE(
                        REPLACE( REPLACE( REPLACE( REPLACE( REPLACE(
                        a.denumire ,'Ă','a'),'Â','a'),'Î','i'),'Ș','s'),
                        'Ț','t') ,'ă','a'),'â','a'),'î','i'),'ș','s'),'ț','t')
                        LIKE '%$word%' OR
                        REPLACE( REPLACE( REPLACE( REPLACE( REPLACE(
                        REPLACE( REPLACE( REPLACE( REPLACE( REPLACE(
                        a.descriere ,'Ă','a'),'Â','a'),'Î','i'),'Ș','s'),
                        'Ț','t') ,'ă','a'),'â','a'),'î','i'),'ș','s'),'ț','t')
                        LIKE '%$word%' OR
                        REPLACE( REPLACE( REPLACE( REPLACE( REPLACE(
                        REPLACE( REPLACE( REPLACE( REPLACE( REPLACE(
                        c.denumire ,'Ă','a'),'Â','a'),'Î','i'),'Ș','s'),
                        'Ț','t') ,'ă','a'),'â','a'),'î','i'),'ș','s'),'ț','t')
                        LIKE '%$word%' OR 
                        REPLACE( REPLACE( REPLACE( REPLACE( REPLACE(
                        REPLACE( REPLACE( REPLACE( REPLACE( REPLACE(
                        jud.nume ,'Ă','a'),'Â','a'),'Î','i'),'Ș','s'),
                        'Ț','t') ,'ă','a'),'â','a'),'î','i'),'ș','s'),'ț','t')
                        LIKE '%$word%' OR
                        REPLACE( REPLACE( REPLACE( REPLACE( REPLACE(
                        REPLACE( REPLACE( REPLACE( REPLACE( REPLACE(
                        jud.abreviere ,'Ă','a'),'Â','a'),'Î','i'),'Ș','s'),
                        'Ț','t') ,'ă','a'),'â','a'),'î','i'),'ș','s'),'ț','t')
                        LIKE '%$word%' OR 
                        REPLACE( REPLACE( REPLACE( REPLACE( REPLACE(
                        REPLACE( REPLACE( REPLACE( REPLACE( REPLACE(
                        d.domeniu ,'Ă','a'),'Â','a'),'Î','i'),'Ș','s'),
                        'Ț','t') ,'ă','a'),'â','a'),'î','i'),'ș','s'),'ț','t')
                        LIKE '%$word%' OR
                        REPLACE( REPLACE( REPLACE( REPLACE( REPLACE(
                        REPLACE( REPLACE( REPLACE( REPLACE( REPLACE(
                        tj.tip_job ,'Ă','a'),'Â','a'),'Î','i'),'Ș','s'),
                        'Ț','t') ,'ă','a'),'â','a'),'î','i'),'ș','s'),'ț','t')
                        LIKE '%$word%') ";
        }//end foreach
//        if ($tip == 'pf' || $tip == 'pj') {
//            $sql .= " where " . substr($whereClause, 0, -3);
//        } else if ($tip == "ep" || $tip == '') {
//            $sql .= " where ap.denumire <>'Boxa' and " . substr($whereClause, 0, -3);
//        }
    }//end if

//    $sql_id = '';
//
//    if ($id_ep != '') {
//        $sql_id = " AND ep.id=" . $id_ep;
//    } else if ($id_pf != '') {
//        $sql_id = " AND pf.id=" . $id_pf;
//    } else if ($id_pj != '') {
//        $sql_id = " AND pj.id=" . $id_pj;
//    }
//    $sql .= $sql_id;
//    if ($tip == 'pf' || $tip == 'pj') {
//        $sql .= ' GROUP BY ap.id, ' . $tip . '_id, nume ';
//    } else if ($tip == "ep" || $tip = '') {
//        $sql .= ' GROUP BY email ';
//    }

    $sql .= ' ORDER BY ';

    if ($where != '') {
        
            $sql .= ' 
                    CASE WHEN a.denumire LIKE "' . $where . '%" THEN 0
                	WHEN a.denumire LIKE "%' . $where . '" THEN 1
                	WHEN a.denumire LIKE "%' . $where . '%" THEN 2
                    ELSE 3
                    END ,
                    CASE WHEN c.denumire LIKE "' . $where . '%" THEN 0
			WHEN c.denumire LIKE "%' . $where . '" THEN 1
			WHEN c.denumire LIKE "%' . $where . '%" THEN 2
                    ELSE 3
                    END, ';
    }
    $sql .= ' d.domeniu, tj.tip_job';
    $result = mysqli_query($cm, $sql) or die("eroare  " . mysqli_error($cm) . "    " . $sql);

    return $result;
}
