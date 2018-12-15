$(document).ready(function (){
    $(".item").click(function (){
        if($(".item").hasClass("dropdown") != true){
            if($(".item").hasClass("active")){
                $(".item").removeClass("active");
            }
            $(this).addClass("active"); 
        }
    });
    $(".ui.dropdown").dropdown();
});