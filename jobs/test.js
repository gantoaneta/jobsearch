$(document).ready(function () {
    $(".dropdown").dropdown();
    $('.clear')
            .on('click', function () {
                $('#competenta')
                        .dropdown('clear')
                        ;
            })
            ;
            $('#insereaza').click(function (){
                insereaza();
            });
});

function insereaza(){
    var path = location.href.split("/jobs"),
            domeniu=$("#domeniu").dropdown('get value'),
            competente=$("#competenta").dropdown('get value');

    $.ajax({
        method: 'post',
        url: path[0] + "/jobs/_controller/ajax_test.php",
        data: {
            actiune: 'insereaza',
            domeniu:domeniu,
            competente:competente
        },
        success: function (result) {
//            $("#tabel").html(result);
            console.log(result);
//            $(".ui.dropdown").dropdown();
        },
        error: function () {
            console.log('OOPS! Something went wrong');
        }
    });
}