$(document).ready(function(){
    $('#register_candidat')
            .form({
                inline : true,
        on: 'submit',
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
                identifier: 'calendar',
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
                        type   : 'email',
                        prompt : 'Introdu un email valid'
                    }
                ]
            },
            email2: {
                identifier: 'email2',
                rules: [
                    {
                        type   : 'match[email]',
                        prompt : 'Cele două email-uri nu sunt asemănătoare'
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
            parola: {
                identifier: 'password',
                rules: [
                    {
                        type   : 'empty',
                        prompt : 'Completează câmpul'
                    }
                ]
            },
            parola2: {
                identifier: 'password2',
                rules: [
                    {
                        type   : 'match[password]',
                        prompt : 'Cele două paole-uri nu sunt asemănătoare'
                    }
                ]
            }
        },
        onFailure: function(){
            console.log("upsie");  
            return false;
        },
        onSuccess: function (){
            console.log("ok");
//            return false;
            //            window.open('../../jobs/');
            //            $("#login").submit();
        }
    });
});