<?php
$id_judet = $_POST['id_judet'];
$disabled='';
if(isset($id_judet) == false){
    $disabled = 'disabled';
}
?>
<div class="ui sixteen center aligned wide column">
    <div class="ui segments">
        <div class="ui horizontal segments">
            <div class="ui red segment">
                <select id="domeniu" multiple="" class="ui search selection dropdown">
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
            </div>
            <div class="ui red segment">
                <select class="ui search selection dropdown" id="judet">
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
            <div class="ui red segment">
                <select class="ui <?php echo $disabled; ?> search selection dropdown" multiple="" id="localitate">
                    <option value="">Localitate</option>
                    <?php
                    if (isset($id_judet) == true) {
                        $result = select_localitate($cm, $id_judet);
                        while ($arr = mysqli_fetch_assoc($result)) {
                            ?>
                            <option value="<?php echo $arr['id']; ?>"><?php echo $arr['localitate']; ?></option>
                            <?php
                        }
                    }
                    ?>
                </select>
            </div>
        </div>
        <div class="ui segment">
            <div class="ui red button">Caută</div>
        </div>
    </div>
</div>