$(document).ready(function () {
    $("#btn_pass").click(function () {
        if ($("#show_pass").hasClass("slash")) {
            $("#show_pass").removeClass("slash");
            $("input[name='password']").attr("type", 'text');
        } else {
            $("#show_pass").addClass("slash");
            $("input[name='password']").attr("type", 'password');
        }
    });
    $("#btn_pass2").click(function () {
        if ($("#show_pass2").hasClass("slash")) {
            $("#show_pass2").removeClass("slash");
            $("input[name='password2']").attr("type", 'text');
        } else {
            $("#show_pass2").addClass("slash");
            $("input[name='password2']").attr("type", 'password');
        }
    });

    $("#judet").dropdown();

    $('#calendar').calendar({
        type: 'date',
        //        formatter: {
        //            date: function (date, settings) {
        //                let momentDate = new Moment(date);
        //                return momentDate.format('yyyy/MM/dd');
        //            }
        //        },
        onChange: function (date, text, mode) {
            text = text.split(" ");
            switch (text[1]) {
                case "Ianuarie":
                    text[1] = "01";
                    break;
                case "Februarie":
                    text[1] = "02";
                    break;
                case "Martie":
                    text[1] = "03";
                    break;
                case "Aprilie":
                    text[1] = "04";
                    break;
                case "Mai":
                    text[1] = "05";
                    break;
                case "Iunie":
                    text[1] = "06";
                    break;
                case "Iulie":
                    text[1] = "07";
                    break;
                case "August":
                    text[1] = "08";
                    break;
                case "Septembrie":
                    text[1] = "09";
                    break;
                case "Octombrie":
                    text[1] = "10";
                    break;
                case "Noiembrie":
                    text[1] = "11";
                    break;
                case "Decembrie":
                    text[1] = "12";
                    break;
            }
            text = text[0] + "." + text[1] + "." + text[2];
            return text;
        }
    });

    if (window.location.href.split("type=")[1] != undefined) {
        $("#type").hide();
    } else {
        $("#type").show();
    }

    $('#login')
            .form({
                inline: true,
                on: 'change',
                fields: {
                    username: {
                        identifier: 'username',
                        rules: [
                            {
                                type: 'empty',
                                prompt: 'Completează câmpul'
                            }
                        ]
                    },
                    password: {
                        identifier: 'password',
                        rules: [
                            {
                                type: 'empty',
                                prompt: 'Completează câmpul'
                            }
                        ]
                    }
                }
            });
    $("#btn_login").click(function () {
        $('.form#login').form('validate form');
        if ($('.form#login').form('is valid') == true) {
            login();
        }
    });
    $("input[name='username']").focus(function () {
        $("#error").hide();
    });


    $('#register')
            .form({
                inline: true,
                on: 'change',
                fields: {
                    nume: {
                        identifier: 'nume',
                        rules: [
                            {
                                type: 'empty',
                                prompt: 'Completează câmpul'
                            }
                        ]
                    },
                    prenume: {
                        identifier: 'prenume',
                        rules: [
                            {
                                type: 'empty',
                                prompt: 'Completează câmpul'
                            }
                        ]
                    },
                    judet: {
                        identifier: 'judet',
                        rules: [
                            {
                                type: 'empty',
                                prompt: 'Completează câmpul'
                            }
                        ]
                    },
                    data: {
                        identifier: 'data',
                        rules: [
                            {
                                type: 'empty',
                                prompt: 'Completează câmpul'
                            }
                        ]
                    },
                    email: {
                        identifier: 'email',
                        rules: [
                            {
                                type: 'empty',
                                prompt: 'Completează câmpul'
                            }
                        ]
                    },
                    email2: {
                        identifier: 'email2',
                        rules: [
                            {
                                type: 'empty',
                                prompt: 'Completează câmpul'
                            }
                        ]
                    },
                    username: {
                        identifier: 'username',
                        rules: [
                            {
                                type: 'empty',
                                prompt: 'Completează câmpul'
                            }
                        ]
                    },
                    password: {
                        identifier: 'password',
                        rules: [
                            {
                                type: 'empty',
                                prompt: 'Completează câmpul'
                            }
                        ]
                    },
                    password2: {
                        identifier: 'password2',
                        rules: [
                            {
                                type: 'empty',
                                prompt: 'Completează câmpul'
                            }
                        ]
                    }
                },
                onvalid: function () {
                    //            window.open('../../jobs/');
                    $("#register").submit();
                }
            });

});

function login() {
    var path = location.href.split("/jobs");
    $.ajax({
        type: 'post',
        url: path[0] + "/jobs/autentificare/_controller/ajax.php",
        data: 'actiune=login&' + $(".ui.form#login").serialize(),
        success: function (result) {
            console.log(result);
            $("#btn_login").parent().before(result);
//            window.location.reload();
        }
    });
}