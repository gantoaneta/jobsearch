<?php
function check_cont($cm, $username, $parola){
    $parola= md5($parola);
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
    $select_jud = "select j.id as id from judet j
        where j.nume='$abv_judet'";
    $result_select_jud= mysqli_query($cm, $select_jud) or die("nu poate fi selectat judetul  ". mysqli_error($cm));
    $arr_select1 = mysqli_fetch_assoc($result_select_jud);
    
    $select_utilizator_candidat = "select c.id as cid, u.id as uid from candidat c 
        inner join utilizator_candidat uc on c.id=uc.id_candidat 
        inner join utilizator u on u.id=uc.id_utilizator where username='$username'";
    $result_select_utiliz= mysqli_query($cm, $select_utilizator_candidat);
    $arr_select2 = mysqli_fetch_assoc($result_select_utiliz);
    
    $insert1 = "INSERT INTO candidat set nume='$nume', prenume='$prenume', id_judet='". $arr_select1['id']."', data_nasterii = '$data'";
    $result_insert1= mysqli_query($cm, $insert1) or die("Exista o eroare1"." ". mysqli_error($cm)." ".$insert1);
        
    $insert2="INSERT INTO utilizator set username='$username',  parola='$parola',  email='$email',  tip_utilizator=3";
    $result_insert2= mysqli_query($cm, $insert2) or die("Exista o eroare2"." ". mysqli_error($cm)." ".$insert2);
    
    
    $insert2="INSERT INTO utilizator_candidat set id_utilizator=".$arr_select2["uid"].", id_candidat=".$arr_select2["cid"].", email='$email', tip_utilizator=3";
    $result_insert2= mysqli_query($cm, $insert2) or die("Exista o eroare3"." ". mysqli_error($cm)." ".$insert2);
            
}