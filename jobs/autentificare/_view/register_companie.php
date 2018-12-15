<div class="seven wide centered column">
    <div class="ui top attached red inverted segment">                    
        <div class="ui small center aligned header">Înregistrare companie</div>
    </div>
    <div class="ui bottom attached segment">
        <form class="ui form" method="post" id='login'>
            <div class="field">
                <label>Username</label>
                <input type="text" name="username" placeholder="Username">
            </div>
            <div class="field">
                <label>Parola</label>
                <div class="ui action input">
                    <input type="password" name="password" placeholder="Parola">
                    <button type="button" class="ui icon button" id="btn_pass">                                
                        <i class="eye slash icon"  id="show_pass"></i>
                    </button>
                </div>
                            <?php
                                
                            if(isset($_POST['username']) == true && isset($_POST['password']) == true){
                                $username = $_POST['username'];
                                $parola = $_POST['password'];
                                $row = check_cont($cm, $username, $parola);
                                if($row == 0){
                                    $return = "<div class='ui pointing red basic fluid label' id='error'>
                                        Nu există combinația username/parola.
                                                </div>";
                                } else {
                                    $return='';
//var_dump($_POST);
//var_dump($_SESSION);
//redirect(PATH);
                                }
                                echo $return;
                            }
                            ?>
            </div>         
            <div class="field" style="text-align: right">
                <button class="ui red button" type="submit">Log in</button>
            </div>
        </form>
    </div>
</div>