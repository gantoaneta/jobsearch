<?php
//session_start();
require_once '../_model/connection.php';
$cm = connection();
if(isset($_POST['username'])){
    $sql = "SELECT u.id uid, username, tu.id 
            FROM utilizator u INNER join tip_utilizator tu on u.tip_utilizator = tu.id
            WHERE username='".$_POST['username']."'";
    $result = mysqli_query($cm, $sql);
    //die($sql);
    $row = check_cont($cm, $_POST['username'], $_POST['password']);
        if($row == 0){
//            die("Nu există combinația username/parola.");
        } else { 
            while ($arr = mysqli_fetch_array($result)) {
                $_SESSION['uid']= $arr['uid'];
                $_SESSION['user'] = $arr['username'];
                $_SESSION['tip'] = $arr['id'];
            }
                       
    }
}
