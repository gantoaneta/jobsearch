<!DOCTYPE html>
<?php
require_once '_controller/connection.php';
$conn = connection();
?>
<html>
    <head>
        <title>Conectare</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../semantic/semantic.min.css">
        <script src="../jq/jquery-3.3.1.min.js"></script>
        <script src="../semantic/semantic.min.js"></script>
        <script src="_scripts/dropdown.js"></script>
    </head>
    <body>
        <div class="ui center aligned header">dropdown</div>
        <div class="ui center aligned grid container">
            <div class="ui multiple search center aligned selection dropdown" >

                <i class="dropdown icon"></i>
                <div class="default text" value="">-----alege-----</div>
                <div class="menu">
                    <?php require_once '_model/functii.php'; ?>
                </div>
            </div>
        </div>

    </body>
</html>