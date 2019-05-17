<div class="ten wide centered column">
    <div class="ui top attached red inverted segment">                    
        <div class="ui small center aligned header">Înregistrare candidat</div>
    </div>
    <div class="ui bottom attached segment">
        <form class="ui form" method="post" id='register_candidat'>
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
                <button class="ui red button" type="submit">Înregistrează-te</button>
            </div>
        </form>
        <?php 
        if(isset($_POST['nume']) && isset($_POST['prenume']) && isset($_POST['email']) && isset($_POST['data']) && 
                isset($_POST['username']) && isset($_POST['password']) && isset($_POST['judet'])){
            $_POST['password']= md5($_POST['password']);
            $_POST['password2']= md5($_POST['password2']);
            $data= explode(" ", $_POST['data']);
                
            switch ($data[1]){
                case "Ianuarie":
                    $data[1]="01";
                    break;
                case "Februarie":
                    $data[1]="02";
                    break;
                case "Martie":
                    $data[1]="03";
                    break;
                case "Aprilie":
                    $data[1]="04";
                    break;
                case "Mai":
                    $data[1]="05";
                    break;
                case "Iunie":
                    $data[1]="06";
                    break;
                case "Iulie":
                    $data[1]="07";
                    break;
                case "August":
                    $data[1]="08";
                    break;
                case "Septembrie":
                    $data[1]="09";
                    break;
                case "Octombrie":
                    $data[1]="10";
                    break;
                case "Noiembrie":
                    $data[1]="11";
                    break;
                case "Decembrie":
                    $data[1]="12";
                    break;
            }
                
            $nume = $_POST['nume'];
            $prenume = $_POST['prenume'];
            $email = $_POST['email'];
            $data = $data[0]."-".$data[1]."-".$data[2];
            $username = $_POST['username'];
            $parola = $_POST['password'];
            $abv_judet = $_POST['judet'];
//                        var_dump($_POST);
            insert_candidat($cm, $nume, $prenume, $email, $data, $username, $parola, $abv_judet);
        }
        ?>
    </div>
</div>