<div class="ten wide centered column">
    <div class="ui top attached red inverted segment">                    
        <div class="ui small center aligned header">Înregistrare candidat</div>
    </div>
    <div class="ui bottom attached segment">
        <form class="ui form" id='register_candidat'>
            <div class="fields">
                <div class="eight wide field">
                    <label>Nume</label>
                    <input type="text" name="nume" placeholder="Nume" >
                </div>
                <div class="eight wide field">
                    <label>Prenume</label>
                    <input type="text" name="prenume" placeholder="Prenume" >
                </div>
            </div>
            <div class="fields">
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
                            <div class="item" data-value="<?php echo $judet["nume"]; ?>"><?php echo $judet["nume"]; ?></div>
                                <?php
                        }
                        ?>
                        </div>
                    </div>
                </div>
                <div class="eight wide field">
                    <label>Data nașterii</label>
                    <div class="ui caledar" id="calendar" >
                        <div class="ui input left icon">
                            <i class="calendar icon"></i>
                            <input type="text" placeholder="Data" name="data" >
                        </div>
                    </div>
                </div>
            </div>
            <div class="fields">
                <div class="eight wide field">
                    <label>E-mail</label>
                    <input type="text" name="email" placeholder="persoana@mail.com" >
                </div>
                <div class="eight wide field">
                    <label>Repetare e-mail</label>
                    <input type="text" name="email2" placeholder="persoana@mail.com" >
                </div>
            </div>
            <div class="eight wide field">
                <label>Username</label>
                <input type="text" name="username" placeholder="Username" >
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
                <div class="ui red button" id="btn_candidat">Înregistrează-te</div>
            </div>
        </form>
    </div>
</div>