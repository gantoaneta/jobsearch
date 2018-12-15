<?php
require_once __DIR__ . '/../_model/select.php';

class fct {
    public static function cauta($conn, $cuv = '', $id = ''){
        $cuv = mysqli_real_escape_string($conn, $cuv);
        $id = mysqli_real_escape_string($conn, $id);
        
        $result = select_ap($cuv, $id);
        
        $a = array();
        while (($l = mysqli_fetch_assoc($result)) !== null) {
            $a[$l['id']] = array(
                                       "persoana"       => $l['persoana'],
                                      );
        }

        return $a;

    }//end cauta()
    
        public static function json($array){
        $temp = '[';
        foreach ($array as $key => $value) {
            $temp .= '{"value":"'.$key.'",' . 
                    '"label":"'. $value['persoana'];
            $temp .= '"},';
            
        }
        
            $temp = trim($temp, ",");
            return $temp.']';
            
    }//end jsArray()
}

