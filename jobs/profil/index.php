<?php
session_start();
header('Content-Type: text/html; charset=utf-8');
if (isset($_SERVER['HTTPS']) && $_SERVER != "undefined" && $_SERVER != Null) {
    $http = 'https';
} else {
    $http = 'http';
}
define("ROOT_LINK", "$http://" . $_SERVER["HTTP_HOST"] . $_SERVER["CONTEXT_PREFIX"] . "/jobs/");
define("PATH", str_replace('\\', '/', realpath("../")));

require_once PATH . '/_model/connection.php';
$cm = connection();
require_once PATH . '/autentificare/_model/functii_login.php';
require_once PATH . '/autentificare/_model/autentificare.php';
require_once PATH . '/autentificare/_model/redirect.php';
//var_dump($_POST);
global $title;
$title = "acasa";
?>
<html>
    <head>
        <meta charset="UTF-8" lang="ro-RO">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">        
        <script src="<?php echo ROOT_LINK; ?>dist/jquery-3.3.1.min.js<?php mt_rand(); ?>"></script>
        <script src="<?php echo ROOT_LINK; ?>dist/semantic/semantic.min.js<?php mt_rand(); ?>"></script>
        <!--<script src="<?php echo ROOT_LINK; ?>autentificare/_scripts/login.js<?php mt_rand(); ?>"></script>-->
        <script src="<?php echo ROOT_LINK; ?>_scripts/script.js<?php mt_rand(); ?>"></script>
        <!--<script src="<?php echo ROOT_LINK; ?>dist/Semantic-UI-Calendar/dist/calendar.min.js<?php mt_rand(); ?>"></script>-->
        <!--<script src="<?php echo ROOT_LINK; ?>autentificare/_scripts/register.js<?php mt_rand(); ?>"></script>-->

        <link rel="stylesheet" href="<?php echo ROOT_LINK; ?>dist/semantic/semantic.min.css<?php mt_rand(); ?>" />
        <!--<link rel="stylesheet" href="<?php echo ROOT_LINK; ?>dist/Semantic-UI-Calendar/dist/calendar.min.css<?php mt_rand(); ?>" />-->
        <!--<link rel="stylesheet" href="<?php echo ROOT_LINK; ?>autentificare/_styles/login.css<?php mt_rand(); ?>" />-->
        <link rel="stylesheet" href="<?php echo ROOT_LINK; ?>_styles/style.css<?php mt_rand(); ?>" />
        <link href="https://fonts.googleapis.com/css?family=Muli&display=swap" rel="stylesheet">

        <link rel="shortcut icon" type="image/png" href="../img/logo-grey.png"/>

        <title>Log in</title>
    </head>
    <body>
        <?php
        require_once PATH . '/_view/menu.php';
        ?>
        <div class="ui red inverted segment" id="descriere">
            <div class="ui center aligned header">Setări profil</div>
        </div>
    </body>
</html>