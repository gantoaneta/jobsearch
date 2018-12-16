<div class="eight wide centered column">
    <div class="ui top attached red inverted segment">                    
        <div class="ui small center aligned header">Înregistrare companie</div>
    </div>
    <div class="ui bottom attached segment">
        <form class="ui form" method="post" id='register'>
            <div class="fields">
                <div class="eight wide field">
                    <label>Nume companie</label>
                    <input type="text" name="nume" placeholder="Nume companie" >
                </div>
                <div class="eight wide field">
                    <label>CUI</label>
                    <input type="text" name="cui" placeholder="CUI" >
                </div>
            </div>
            <div class="fields">
                <div class="eight wide field">
                    <label>Adresa</label>
                    <input type="text" name="adresa" placeholder="Strada, numărul...." >
                </div>
                <div class="eight wide field">
                    <label>Județ</label>
                    <div class="ui fluid search selection dropdown">
                        <input type="hidden" name="judet" >
                        <i class="dropdown icon"></i>
                        <div class="default text">Selecteză județul</div>
                        <div class="menu">
                        <?php 
                        $result = selectAll_judet($cm); 
                        while($judet = mysqli_fetch_assoc($result)){
                                ?>
                            <div class="item" data-value="<?php echo $judet["abreviere"]; ?>"><?php echo $judet["nume"]; ?></div>
                                <?php
                        }
                        ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="fields">
                <div class="eight wide field">
                    <label>E-mail</label>
                    <input type="text" name="email" placeholder="companie@mail.com" >
                </div>
                <div class="eight wide field">
                    <label>Repetare e-mail</label>
                    <input type="text" name="email2" placeholder="companie@mail.com" >
                </div>
            </div>
            <div class="eight wide field">
                <label>Username</label>
                <input type="text" name="username" placeholder="Username">
            </div>
            <div class="fields">
                <div class="eight wide field">
                    <label>Parola</label>
                    <div class="ui action input">
                        <input type="password" name="password" placeholder="Parola" >
                        <button type="button" class="ui icon button" id="btn_pass">                                
                            <i class="eye slash icon"  id="show_pass"></i>
                        </button>
                    </div>
                </div>
                <div class="eight wide field">
                    <label>Repetare parola</label>
                    <div class="ui action input">
                        <input type="password" name="password2" placeholder="Parola" >
                        <button type="button" class="ui icon button" id="btn_pass2">                                
                            <i class="eye slash icon"  id="show_pass2"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="field" style="text-align: center">
                <button class="ui red button" type="submit">Înregistrează-te</button>
            </div>
        </form>
    </div>
</div>