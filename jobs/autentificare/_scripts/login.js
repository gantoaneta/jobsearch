$(document).ready(function (){
    $("#btn_pass").click(function (){
        if($("#show_pass").hasClass("slash")){
            $("#show_pass").removeClass("slash");
            $("input[name='password']").attr("type", 'text');
        } else {
            $("#show_pass").addClass("slash");
            $("input[name='password']").attr("type", 'password');
        }
    });
    $("#btn_pass2").click(function (){
        if($("#show_pass2").hasClass("slash")){
            $("#show_pass2").removeClass("slash");
            $("input[name='password2']").attr("type", 'text');
        } else {
            $("#show_pass2").addClass("slash");
            $("input[name='password2']").attr("type", 'password');
        }
    });
    
    $("#judet").dropdown();
    
    $('#calendar').calendar({
        type: 'date'
    });
    
    if(window.location.href.split("type=")[1] != undefined){
        $("#type").hide();
        //alert("ok");
    } else {
        //        alert("not ok");
        $("#type").show();
    }
    
    $('#login')
            .form({
                inline : true,
        on: 'change',
        //        fields: {
        //            username: {
        //                identifier: 'username',
        //                rules: [
        //                    {
        //                        type   : 'empty',
        //                        prompt : 'Completează câmpul'
        //                    }
        //                ]
        //            },
        //            password: {
        //                identifier: 'password',
        //                rules: [
        //                    {
        //                        type   : 'empty',
        //                        prompt : 'Completează câmpul'
        //                    }
        //                ]
        //            }
        //        },
        onvalid: function (){
            //            window.open('../../jobs/');
            $("#login").submit();
        }
    });
    
    $("input[name='username']").focus(function (){
        $("#error").hide(); 
    });
    
    
       $('#register')
            .form({
                inline : true,
        on: 'change',
               fields: {
                   nume: {
                       identifier: 'nume',
                       rules: [
                           {
                               type   : 'empty',
                               prompt : 'Completează câmpul'
                           }
                       ]
                   },
                   prenume: {
                       identifier: 'prenume',
                       rules: [
                           {
                               type   : 'empty',
                               prompt : 'Completează câmpul'
                           }
                       ]
                   },
                   judet: {
                       identifier: 'judet',
                       rules: [
                           {
                               type   : 'empty',
                               prompt : 'Completează câmpul'
                           }
                       ]
                   },
                   data: {
                       identifier: 'data',
                       rules: [
                           {
                               type   : 'empty',
                               prompt : 'Completează câmpul'
                           }
                       ]
                   },
                   email: {
                       identifier: 'email',
                       rules: [
                           {
                               type   : 'empty',
                               prompt : 'Completează câmpul'
                           }
                       ]
                   },
                   email2: {
                       identifier: 'email2',
                       rules: [
                           {
                               type   : 'empty',
                               prompt : 'Completează câmpul'
                           }
                       ]
                   },
                   username: {
                       identifier: 'username',
                       rules: [
                           {
                               type   : 'empty',
                               prompt : 'Completează câmpul'
                           }
                       ]
                   },
                   password: {
                       identifier: 'password',
                       rules: [
                           {
                               type   : 'empty',
                               prompt : 'Completează câmpul'
                           }
                       ]
                   },
                   password2: {
                       identifier: 'password2',
                       rules: [
                           {
                               type   : 'empty',
                               prompt : 'Completează câmpul'
                           }
                       ]
                   }
               },
        onvalid: function (){
            //            window.open('../../jobs/');
            $("#register").submit();
        }
    });
    
});