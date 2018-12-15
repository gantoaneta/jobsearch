<div class="ten wide centered column">
    <div class="ui top attached red inverted segment">                    
        <div class="ui small center aligned header">Înregistrare candidat</div>
    </div>
    <div class="ui bottom attached segment">
        <form class="ui form" method="post" id='register'>
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
                            <div class="item" data-value="<?php echo $judet["abreviere"]; ?>"><?php echo $judet["nume"]; ?></div>
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
                            <input type="text" placeholder="Data" >
                        </div>
                    </div>
                </div>
            </div>
            <div class="fields">
                <div class="eight wide field">
                    <label>Email</label>
                    <input type="email" name="email" placeholder="Email" >
                </div>
                <div class="eight wide field">
                    <label>Repetare email</label>
                    <input type="email" name="email2" placeholder="Email" >
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