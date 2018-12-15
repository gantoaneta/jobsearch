<?php
if(isset($_GET["link"]) == true){
    if($_GET["link"] == "register"){
        ?>
<div class="ui grid column">
    <div class="seven wide centered column" id="type">
        <div class="ui top attached red inverted segment">                    
            <div class="ui tiny center aligned header">Înregistrare</div>
        </div>
        <div class="ui bottom attached segment">
<!--            <form class="ui form" method="post" id='register'>
                <div class="ui segment">-->
                    <div class="ui two column stackable center aligned grid">
                        <div class="ui vertical divider">Sau</div>
                        <div class="middle aligned row">
                            <div class="column">
                                <div class="ui row">
                                    <div class="ui icon header">
                                        <i class="users icon"></i>
                                    </div>
                                </div>
                                <div class="ui row">
                                    <div class="ui red button" onclick="window.location.href+='&type=candidat'">
                                        Cont nou candidat
                                    </div>
                                </div>
                            </div>
                            <div class="column">
                                <div class="ui row">
                                    <div class="ui icon header">
                                        <i class="briefcase icon"></i>
                                    </div>
                                </div>
                                <div class="ui row">
                                    <div class="ui red button" onclick="window.location.href+='&type=companie'">
                                        Cont nou companie
                                    </div>
                                </div>
                            </div>
                        </div>
<!--                    </div>
            </form>-->
        </div>
    </div>
</div>
<?php
} 
    if(isset($_GET["type"]) == true && $_GET["type"] == "candidat"){
        require_once PATH . "/autentificare/_view/register_candidat.php";
    }else if(isset($_GET["type"]) == true && $_GET["type"] == "companie"){
        require_once PATH . "/autentificare/_view/register_companie.php";
    }
}