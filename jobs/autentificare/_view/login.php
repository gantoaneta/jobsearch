<div class="ui grid column">
    <div class="seven wide centered column">
        <div class="ui top attached red inverted segment">                    
            <div class="ui tiny center aligned header">Autentifică-te</div>
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
                </div>         
                <div class="field" style="text-align: right">
                    <div class="ui red button" id="btn_login">Log in</div>
                </div>
            </form>
        </div>
    </div>
</div>