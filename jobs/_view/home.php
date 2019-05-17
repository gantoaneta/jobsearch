<div class="ui grid container">
    <div class="ui sixteen center aligned wide column">
        <div class="ui red segment">
            <select id="domeniu" multiple="" class="ui  dropdown">
                <option value="">Domeniu</option>
                <?php
                $result = select_domeniu($cm);
                while ($arr = mysqli_fetch_assoc($result)) {
//                                        var_dump($arr);
                    ?>
                    <option value="<?php echo $arr['id']; ?>"><?php echo $arr['domeniu']; ?></option>
                    <?php
                }
                ?>
            </select>
            <div class="ui eight wide column">
                <select class="ui  dropdown" multiple="" id="judet">
                    <option value="">Județ</option>
                    <?php
                    $result = select_judet($cm);
                    while ($arr = mysqli_fetch_assoc($result)) {
                        ?>
                        <option value="<?php echo $arr['id']; ?>"><?php echo $arr['nume'] . " , " . $arr['abreviere']; ?></option>
                        <?php
                    }
                    ?>
                </select>
            </div>
        </div>
    </div>