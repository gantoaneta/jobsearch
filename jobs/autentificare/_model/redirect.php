<?php
//define("PATH", realpath(str_replace('\\', '/', realpath("../"))));
function redirect($url){
    header('Location: '.$url);
}