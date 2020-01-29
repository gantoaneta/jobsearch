<div class="ui grid">
    <div class="sixteen wide column">
        <div class="ui red inverted menu">
            <a href="<?php echo ROOT_LINK; ?>" id="logo" class="item">
                <img class="ui tiny image" alt="logo Job Search" src="<?php echo ROOT_LINK; ?>img/logotxt-grey.png"></img>
            </a>
            <a href="#cauta" class="item">
                Caută job
            </a>
            <a href="<?php echo ROOT_LINK; ?>adaugare_job/" class="item">
                Adaugă job
            </a>
                <?php
            if(isset($_SESSION['uid']) == false){?>
            <div class="right menu">
                <a href="<?php echo ROOT_LINK; ?>autentificare/?link=register" class="item">
                    Înregistrează-te
                </a>
                <a href="<?php echo ROOT_LINK; ?>autentificare/?link=login" class="item">
                    Intră în cont
                </a>
            </div>
            <?php } else {
                ?>
            <div class="right menu">
                <div class="ui dropdown link item">
                    <div class="text">
                        <i class="user circle icon"></i>
                        <span class='text'>Bine ai venit, <?php echo $_SESSION['user'];?></span>
                    </div>
                    <i class="dropdown icon"></i>
                    <div class="menu">
                        <div class="item" onclick="window.location.href='/jobs/profil/'"><i class="cog icon"></i>Setări cont</div>
                        <div class="divider"></div>
                        <div class="item"><i class="sign-out icon"></i>Ieșire cont</div>
                    </div>
                </div>
                <a href="" onclick="<?php session_destroy(); ?>" class="item">
                    Ieși din cont
                </a>
            </div>
            <?php
            }
            ?>
        </div>
    </div>
</div>
