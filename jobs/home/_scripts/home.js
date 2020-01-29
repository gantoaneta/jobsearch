$(document).ready(function () {
    afiseaza_segment_principal();
});


function afiseaza_segment_principal() {
    var path = location.href.split("/jobs"),
            id_judet = '';
    if (sessionStorage.getItem('judet') != '') {
        id_judet = sessionStorage.getItem('judet');
    }

    $.ajax({
        method: 'post',
        url: path[0] + "/jobs/home/_controller/ajax.php",
        data: {
            actiune: "afiseaza_segment_principal",
            id_judet: id_judet
        },
        success: function (result) {
//            console.log(result);
            $("#segment_principal").html(result);
            $(".ui.dropdown").dropdown({
                fullTextSearch:true
            });
            var domeniu=new Array();
            for (var i = 0; i < sessionStorage.getItem('domeniu').split(',').length; i++) {
                domeniu += "'"+sessionStorage.getItem('domeniu').split(',')[i]+"', ";
            }
            domeniu="["+domeniu.slice(0, -2)+"]";
            console.log(domeniu);
            $("#domeniu").dropdown('set selected', domeniu);
            $("#judet").dropdown('set selected', sessionStorage.getItem('judet'));
            $("#localitate").dropdown('set selected', sessionStorage.getItem('localitate'));

            $("#domeniu").change(function () {
                sessionStorage.setItem('domeniu', $("#domeniu").dropdown('get value'));
            });
            $("#judet").change(function () {
                sessionStorage.setItem('judet', $("#judet").dropdown('get value'));
            });
            $("#localitate").change(function () {
                sessionStorage.setItem('localitate', $("#localitate").dropdown('get value'));
            });
            console.log(id_judet  != '');
            if (id_judet != '') {
                $("#localitate").removeClass("disabled");
            }
        },
        error: function () {
            console.log('OOPS! Something went wrong');
        }
    });
}