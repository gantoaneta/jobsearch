<?php
session_start();
//var_dump($_SESSION);
//var_dump($_POST);

if (isset($_SERVER['HTTPS']) && $_SERVER != "undefined" && $_SERVER != Null) {
    $http = 'https';
} else {
    $http = 'http';
}
define("ROOT_LINK", "$http://" . $_SERVER["HTTP_HOST"] . $_SERVER["CONTEXT_PREFIX"] . "/jobs/");
define("PATH", str_replace('\\', '/', realpath(__DIR__)));
require_once PATH . '/_model/connection.php';
$cm = connection();

require_once PATH . '/_model/functii_comune.php';
require_once PATH . '/_model/functii_test.php';

?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="<?php echo ROOT_LINK; ?>dist/jquery-3.3.1.min.js<?php mt_rand(); ?>"></script>
        <script src="<?php echo ROOT_LINK; ?>dist/semantic/semantic.min.js<?php mt_rand(); ?>"></script>
        <script src="<?php echo ROOT_LINK; ?>test.js<?php mt_rand(); ?>"></script>

        <link rel="stylesheet" href="<?php echo ROOT_LINK; ?>dist/semantic/semantic.min.css<?php mt_rand(); ?>">

        <link rel="shortcut icon" type="image/png" href="img/logo-grey.png"/>

        <title>test</title>
           
    </head>
    <body>
        <div class="ui grid container">
            <div class="ui sixteen center aligned wide column">
                <div class="ui red segment">
                    <div class="ui row">
                        <select class="ui search dropdown" id="domeniu">
                            <option value="">domeniu</option>
                            <?php
                            $result = get_domeniu($cm);
                            while ($row = mysqli_fetch_assoc($result)) {
                                ?>

                                <option value="<?php echo $row['id']; ?>"><?php echo $row['domeniu']; ?></option>
                                <?php
                            }
                            ?>
                        </select>
                    </div>
                    <div class="ui row">
                        <select class="ui search dropdown" multiple="" id="competenta">
                            <option value="">competenta</option>
                            <?php
                            $result = get_competente($cm);
                            while ($row = mysqli_fetch_assoc($result)) {
                                ?>

                                <option value="<?php echo $row['id']; ?>"><?php echo $row['denumire']; ?></option>
                                <?php
                            }
                            ?>
                        </select>
                        <div class="ui button clear">
                            Clear competenta
                        </div>
                    </div>
                </div>
                <div class="ui button" id="insereaza">
                    Insereaza
                </div>
            </div>
        </div>
    </body>
</html>
