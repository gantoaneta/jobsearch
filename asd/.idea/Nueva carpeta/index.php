<!DOCTYPE html>
<html>
    <head>
        <title>Semantic</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../semantic/semantic.min.css" />
        <link rel="stylesheet" href="styles/semantic.css" />
        <script src="../../test/semantic/js/jquery-3.3.1.min.js"></script>
        <!--<script src="../jquery-ui-1.12.1/jquery-ui.js"></script>-->
        <script src="../../test/semantic/dist/semantic.min.js"></script>
        <script src="scripts/search_category.js"></script>
        <!--<script src="../semantic/semantic.min.js"></script>-->
        <script src="scripts/api.js"></script>
        <!--<script src="scripts/search_category.js"></script>-->
        <script src='../../test/_scripts/actiuni.js'></script>
        <script src='../../test/_scripts/search.js'></script>
        <script src="scripts/search.js"></script>
    </head>
    <body>
        <div class="ui grid">
            <div class="sixteen wide red column">
                <?php require_once '../../test/_view/search.php'; ?>
            </div>
            <div class="eight wide blue center aligned column ">
                <div class="ui vertical buttons">
                    <button class="ui negative button">negative</button>
                    <button class="ui positive button">positive</button>
                </div>
            </div>
            <div class="eight wide grey column">
                <div class='ui left floated buttons'>
                    <button class="ui inverted red button">Red</button>
                    <div class='or' data-text='sau'></div>
                    <button class="ui inverted red basic button">Basic Red</button>
                </div>
            </div>
            <div class="four wide grey column"><?php 
            $myString = 'foo';
            echo $myString[0] . ' </br> ' . $myString[3];
            ?></div>
            <div class="four wide black column"></div>
            <div class="four wide pink column"></div>
            <div class="four wide green column"></div>
            <div class="sixteen wide red column">
                <div class="ui fluid search" id="category">
                    <div class="ui icon input">
                        <input class="prompt" type="text" placeholder="Căutare...">
                        <i class="search icon"></i>
                    </div>
                    <div class="results"></div>
                </div>
            </div>
            <div class="sixteen wide grey center aligned column">
                <table class="ui selectable celled center aligned table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Status</th>
                            <th>Notes</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>John</td>
                            <td>No Action</td>
                            <td>None</td>
                        </tr>
                        <tr>
                            <td>Jamie</td>
                            <td>Approved</td>
                            <td>Requires call</td>
                        </tr>
                        <tr>
                            <td>Jill</td>
                            <td>Denied</td>
                            <td>None</td>
                        </tr>
                        <tr>
                            <td>John</td>
                            <td>No Action</td>
                            <td>None</td>
                        </tr>
                        <tr>
                            <td>Jamie</td>
                            <td>Approved</td>
                            <td>Requires call</td>
                        </tr>
                        <tr>
                            <td>Jill</td>
                            <td>Denied</td>
                            <td>None</td>
                        </tr>
                    </tbody>
                    <tfoot class="full-width">
                        <tr>
                            <th>TOTAL</th>
                            <th colspan="2">Status</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </body>
</html>
