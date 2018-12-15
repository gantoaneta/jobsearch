function check(lname, fname, email, emailC, psw, pswC) {
    if(lname.length<3){
        document.getElementById('lnameW').innerHTML="Introduceti un nume valid (minim 3 caractere)";
    }else {
        document.getElementById('lnameW').innerHTML = "";
    }

    if(fname.length<3){
        document.getElementById('fnameW').innerHTML="Introduceti un prenume valid (minim 3 caractere)";
    }else {
        document.getElementById('fnameW').innerHTML="";
    }

    if(email=""){
        document.getElementById('emailW').innerHTML="Introduceti un email";

    }else{
        var filter=/^([A-z0-9])+\@(([A-z0-9])+\.)+([A-z0-9]{2,4})/g;
        if(!filter.test(email.toString())==true){
            document.getElementById('emailW').innerHTML="Introduceti o adresa de email valida";
        }else {
            document.getElementById('emailW').innerHTML="";
        }
    }

    if(emailC=""){
        document.getElementById('emailCW').innerHTML="Introduceti inca odata emailul pentru a-l confirma";
    }
    if(email!=emailC){
        document.getElementById('emailCW').innerHTML="Cele doua emailuri introduse nu se potrivesc";
    }else{
        document.getElementById('emailCW').innerHTML="";
    }

    if(psw.length<8){
        document.getElementById('pswW').innerHTML="Parola trebuie sa fie de minim 8 caractere";
    }else {
        document.getElementById('pswW').innerHTML = "";
    }
    if(psw!=pswC){
            document.getElementById('pswCW').innerHTML="Cele doua parole nu se potrivesc";
    }else{
        document.getElementById('pswCW').innerHTML="";
    }

}

function myFunction() {
    var lname = document.getElementById('lname').value,
        fname = document.getElementById('fname').value,
       // username= document.getElementById('username').value,
        email = document.getElementById('email').value,
        emailC = document.getElementById('emailConf').value,
        psw = document.getElementById('psw').value,
        pswC = document.getElementById('pswConf').value;
    var isValid=check(lname, fname, email, emailC, psw, pswC);
    if(!isValid){
        event.preventDefault();
        psw="";
        pswC="";
        window.history.back();
        return false;
    }    
}


