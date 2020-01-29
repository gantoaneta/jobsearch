<?php
session_start();
var_dump($_SESSION);
//var_dump($_POST);
//$_SESSION['uid']=9; $_SESSION['user']='qasdfgjklp'; $_SESSION['tip']=3;

if (isset($_SERVER['HTTPS']) && $_SERVER != "undefined" && $_SERVER != Null) {
    $http = 'https';
} else {
    $http = 'http';
}
define("ROOT_LINK", "$http://" . $_SERVER["HTTP_HOST"] . $_SERVER["CONTEXT_PREFIX"] . "/jobs/");
define("PATH", str_replace('\\', '/', realpath(__DIR__)));
require_once PATH . '/_model/connection.php';
$cm= connection();
require_once PATH . '/autentificare/_controller/redirect.php';

require_once PATH . '/_model/functii_comune.php';
//var_dump(ROOT_LINK);
//require_once PATH.'/autentificare/_model/autentificare.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="<?php echo ROOT_LINK; ?>dist/jquery-3.3.1.min.js<?php mt_rand(); ?>"></script>
        <script src="<?php echo ROOT_LINK; ?>dist/semantic/semantic.min.js<?php mt_rand(); ?>"></script>
        <script src="<?php echo ROOT_LINK; ?>_scripts/script.js<?php mt_rand(); ?>"></script>
        <script src="<?php echo ROOT_LINK; ?>_scripts/search.js"></script>
        <script src="<?php echo ROOT_LINK; ?>home/_scripts/home.js"></script>

        <link rel="stylesheet" href="<?php echo ROOT_LINK; ?>dist/semantic/semantic.min.css<?php mt_rand(); ?>">
        <link rel="stylesheet" href="<?php echo ROOT_LINK; ?>_styles/style.css<?php mt_rand(); ?>" />
        <link href="https://fonts.googleapis.com/css?family=Muli&display=swap" rel="stylesheet">

        <link rel="shortcut icon" type="image/png" href="img/logo-grey.png"/>

        <title>Titlu</title>
    </head>
    <body>
        <?php
//        var_dump($_SESSION);
//        var_dump($_POST);
//        var_dump(PATH);
//        if(isset($_SESSION['uid']) == true){
        require_once PATH . '/_view/menu.php';
        ?>

        <div class="ui red inverted segment" id="descriere">
            <div class="ui center aligned header">Job Search</div>
        </div>
        <?php 
        require_once PATH . '/_view/search.php';
        require_once PATH . '/home/index.php';
//        } else {
//           
        ?>
<!--        <script>
            window.location.href="autentificare/";
        </script>-->
        <?php
//        }
//        
        ?>
    </body>
</html>
