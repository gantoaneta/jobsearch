$(document).ready(function () {
    $(".item").click(function () {
        if ($(".item").hasClass("dropdown") != true) {
            if ($(".item").hasClass("active")) {
                $(".item").removeClass("active");
            }
            $(this).addClass("active");
        }
    });
    $(".ui.dropdown").dropdown();
//    search_job();
});

//function afiseza_cautare(){
//    var path = location.href.split("/jobs");
//    
//     $.ajax({
//        method: 'post',
//        url: path[0] + "/test/eproprietar/_controller/search_persoana_ajax.php",
//        data: {
//            id_pf: id_pf,
//            id_pj: id_pj,
//            id_ep: id_ep
//        },
//        success: function (result) {
//        },
//        error: function () {
//            console.log('OOPS! Something went wrong');
//        }
//    });
//}
