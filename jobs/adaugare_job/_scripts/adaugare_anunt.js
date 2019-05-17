$(document).ready(function () {
    afisare_tabel();
})

function afisare_tabel() {
    var path = location.href.split("/jobs");

    $.ajax({
        method: 'post',
        url: path[0] + "/jobs/adaugare_job/_controller/ajax.php",
        data: {
            actiune: 'afiseaza_tabel'
        },
        success: function (result) {
            $("#tabel").html(result);
//            console.log(result);
            $(".ui.dropdown").dropdown();
        },
        error: function () {
            console.log('OOPS! Something went wrong');
        }
    });
}
