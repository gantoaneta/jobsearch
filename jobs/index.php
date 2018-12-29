<?php
session_start();
//var_dump($_SESSION);

if(isset($_SERVER['HTTPS']) && $_SERVER != "undefined" && $_SERVER != Null){
$http='https';
}else{
$http='http';
}
define("ROOT_LINK", "$http://" . $_SERVER["HTTP_HOST"] . $_SERVER["CONTEXT_PREFIX"] . "/jobs/");
define("PATH", str_replace('\\', '/', realpath(__DIR__)));
require_once PATH.'/_controller/connection.php';
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
        
        <link rel="stylesheet" href="<?php echo ROOT_LINK; ?>dist/semantic/semantic.min.css<?php mt_rand(); ?>">
        <link rel="stylesheet" href="<?php echo ROOT_LINK; ?>_styles/style.css<?php mt_rand(); ?>" />
        
        <link rel="shortcut icon" type="image/png" href="img/logo-grey.png"/>
        
        <title>Titlu</title>
    </head>
    <body>
        <?php
        var_dump($_SESSION);
        var_dump($_POST);
//        var_dump(PATH);


//        if(isset($_SESSION['uid']) == true){
        require_once PATH . '/_view/menu.php';
        ?>
        
        <div class="ui red inverted segment" id="descriere">
            <div class="ui center aligned header">Titlu</div>
        </div>
        <div class="ui grid container">
            <div class="sixteen wide center aligned column">
                <table class="ui selectable center aligned celled table">
                    <thead>
                        <tr>
                            <th>Nume</th>
                            <th>Prenume</th>
                            <th>Adresa</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>gal</td>
                            <td>antoaneta</td>
                            <td>iasi</td>
                        </tr>
                        <tr>
                            <td>gal</td>
                            <td>maria</td>
                            <td>pujaire</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <?php 
//        } else {
//           ?>
<!--        <script>
            window.location.href="autentificare/";
        </script>-->
        <?php
//        }
//        ?>
    </body>
</html>
