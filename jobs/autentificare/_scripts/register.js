$(document).ready(function () {
    $('#btn_candidat').click(function () {
        $('#register_candidat')
                .form({
                    inline: true,
                    on: 'blur',
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
                            identifier: 'calendar',
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
                                    type: 'email',
                                    prompt: 'Introdu un email valid'
                                }
                            ]
                        },
                        email2: {
                            identifier: 'email2',
                            rules: [
                                {
                                    type: 'match[email]',
                                    prompt: 'Cele două email-uri nu sunt asemănătoare'
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
                        parola: {
                            identifier: 'password',
                            rules: [
                                {
                                    type: 'empty',
                                    prompt: 'Completează câmpul'
                                }
                            ]
                        },
                        parola2: {
                            identifier: 'password2',
                            rules: [
                                {
                                    type: 'match[password]',
                                    prompt: 'Cele două paole-uri nu sunt asemănătoare'
                                }
                            ]
                        }
                    }
                });
        $('#register_candidat').form('validate form');
        if ($('#register_candidat').form('is valid') == true) {
            register_candidat();
        }
    });
});

function register_candidat() {
    var path = location.href.split("/jobs");
    $.ajax({
        type: 'post',
        url: path[0] + "/jobs/autentificare/_controller/ajax.php",
        data: 'actiune=register_candidat&' + $(".ui.form#register_candidat").serialize(),
        success: function (result) {
            window.location.reload();
        }
    });
}