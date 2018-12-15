<?php
function check_cont($cm, $username, $parola){
    $sql = "SELECT username, parola FROM utilizator WHERE username = '".$username."' AND parola='".$parola."'";
    $result = mysqli_query($cm, $sql) or die("Exista o eroare"." ". mysqli_error($cm)." ".$sql);
    $row = mysqli_num_rows($result);
        
    return $row;
}
    
function selectAll_judet($cm){
    $query = "SELECT nume, abreviere FROM judet";
    $result = mysqli_query($cm, $query) or die("Exista o eroare"." ". mysqli_error($cm)." ".$sql);
//    $array = mysqli_fetch_assoc($result);
    
    return $result;
}
    
function insert_candidat($cm, $nume, $prenume, $email, $data, $username, $parola, $abv_judet ){
    $parola= md5($parola);
    $select_jud = "select j.id from judet j
        where j.abreviere=$abv_judet";
    $result_select_jud= mysqli_query($cm, $select_jud);
    $arr_select1 = mysqli_fetch_assoc($result_select_jud);
    
    $select_utilizator_candidat = "select c.id, u.id from candidat c 
        inner join utilizator_candidat uc on c.id=uc.id_candidat 
        inner join utilizator u on u.id=uc.id_utilizator where username=$username";
    $result_select_utiliz= mysqli_query($cm, $select_utilizator_candidat);
    $arr_select2 = mysqli_fetch_assoc($result_select_utiliz);
    
    $insert1 = "INSERT INTO candidat set nume=$nume, prenume=$prenume, id_judet=". $arr_select1['j.id'].", data_nasterii = $data";
    $result_insert1= mysqli_query($cm, $insert1) or die("Exista o eroare"." ". mysqli_error($cm)." ".$insert1);
        
    $insert2="inset into utilizator set username=$username, parola=$parola, email=$email, tip_utilizator=3";
    $result_insert2= mysqli_query($cm, $insert2) or die("Exista o eroare"." ". mysqli_error($cm)." ".$insert2);
    
    
    $insert2="inset into utilizator_candidat set id_utilizator=".$arr_select2["u.id"].", id_candidat=".$arr_select2["c.id"].", email=$email, tip_utilizator=3";
    $result_insert2= mysqli_query($cm, $insert2) or die("Exista o eroare"." ". mysqli_error($cm)." ".$insert2);
            
}